<?php
namespace ZendServerWebApi;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\Http\Client;
use Zend\Mvc\MvcEvent;
use Zend\EventManager\EventInterface;
use ZendServerWebApi\Model\ApiKey;
use ZendServerWebApi\Model\ZendServer;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;
use Zend\ModuleManager\Feature\ConsoleBannerProviderInterface;
use Zend\Config\Reader\Ini as ConfigReader;


class Module implements ConfigProviderInterface,
                        AutoloaderProviderInterface,
                        BootstrapListenerInterface,
                        ConsoleUsageProviderInterface,
                        ConsoleBannerProviderInterface
{
    /**
     * (non-PHPdoc)
     *
     * @see \Zend\ModuleManager\Feature\ConfigProviderInterface::getConfig()
     */
    public function getConfig ()
    {
        $mainConfig = include __DIR__ . '/config/zendserverwebapi.config.php';
        $apiConf = array();
        foreach (scandir(__DIR__ . '/config/api') as $confFile) {
            if ($confFile == '.' || $confFile == '..')
                continue;
            $tmp = preg_split('@-@', $confFile);
            $apiVersion = preg_replace('@\.config\.php@', '', $tmp[1]);
            $apiConf[$apiVersion] = include __DIR__ . '/config/api/' . $confFile;
        }
        ksort($apiConf);
        foreach ($apiConf as $version => $config) {
            if(isset($config['console']['router']['routes'])) {
                foreach ($config['console']['router']['routes'] as &$router) {
                    if(!isset($router['options']['no-target'])) {
                        $router['options']['route'].= ' [--target=] [--zsurl=] [--zskey=] [--zssecret=]';
                    }
                }
            }
            $mainConfig = array_merge_recursive($mainConfig, $config);
        }

        return $mainConfig;
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Zend\ModuleManager\Feature\AutoloaderProviderInterface::getAutoloaderConfig()
     */
    public function getAutoloaderConfig ()
    {
        return array(
                'Zend\Loader\StandardAutoloader' => array(
                        'namespaces' => array(
                                __NAMESPACE__ => __DIR__ . '/src/' .
                                         __NAMESPACE__
                        )
                )
        );
    }

    /**
     *
     * @param MvcEvent $e
     */
    public function onBootstrap (EventInterface $event)
    {
        $eventManager = $event->getApplication()->getEventManager();

        // check if the command requires special configuration settings
        $eventManager->attach(MvcEvent::EVENT_DISPATCH, array($this,'preDispatch'), 100);
    }

    public function preDispatch(MvcEvent $event)
    {
        $match = $event->getRouteMatch();
        if (!$match) {
            return;
        }

        // Routes with the no-target option do not need target or zsurl zskey zssecret parameters
        $noTarget = $match->getParam('no-target');
        if(!$noTarget) {
            $serviceManager = $event->getApplication()->getServiceManager();
            $appConfig = $serviceManager->get('config');
            $target = $match->getParam('target');
            $config = array();
            if($target) {
                try {
                    $reader = new ConfigReader();
                    $data = $reader->fromFile($appConfig['zsapi']['file']);
                    $config = $data[$target];
                } catch(\Zend\Config\Exception $ex) {
                    throw new \Zend\Console\Exception\RuntimeException('Make sure that you have set your target first. \n
                                                                    This can be done with '.__FILE__.' add-target --target=<UniqueName> --zsurl=http://localhost:10081/ZendServer --zskey= --zssecret=');
                }
            } else {
                if(!($match->getParam('zskey') || $match->getParam('zssecret') || $match->getParam('zsurl'))) {
                    throw new \Zend\Console\Exception\RuntimeException('Specify either a --target= parameter or --zsurl=http://localhost:10081/ZendServer --zskey= --zssecret=');
                }

                foreach (array('zsurl','zskey','zssecret') as $key) {
                    $config[$key] = $match->getParam($key);
                }
            }

            if(isset($config['zsurl'])) {
                $appConfig['zsapi']['url'] = $config['zsurl'];
            }

            $hasFiles = $match->getParam('files');
            if($hasFiles) {
                $zendServerClient = new Model\Http\Client(null, array(
                    'adapter' => 'ZendServerWebApi\Model\Http\Adapter\Socket'
                ));
            } else {
                $zendServerClient = new Client(null, $appConfig['zsapi']['client']);
            }


            $serviceManager->setService('zendServerClient', $zendServerClient);
            $defaultApiKey = new ApiKey($config['zskey'], $config['zssecret']);
            $serviceManager->setService('defaultApiKey', $defaultApiKey);
            $targetServer = new ZendServer($appConfig['zsapi']);
            $serviceManager->setService('targetZendServer', $targetServer);
        }
    }

    /* (non-PHPdoc)
     * @see \Zend\ModuleManager\Feature\ConsoleUsageProviderInterface::getConsoleUsage()
     */
    public function getConsoleUsage(Console $console)
    {
        $config = $this->getConfig();

        $usage = array(
            "The following commands are available:"
        );
        foreach ($config['console']['router']['routes'] as $route) {
            $command = $route['options']['route'];
            $usage[] = "\t$command";
            if(isset($route['options']['info'])) {
                if(!is_array($route['options']['info'])) {
                    $usage[] = $route['options']['info'];
                } else {
                    foreach($route['options']['info'] as $value) {
                        $usage[] = $value;
                    }
                }

            }
        }

        return $usage;
    }

    public function getConsoleBanner(Console $console)
    {
        return 'ZendServerWebApi Client version 1.0';
    }
}
