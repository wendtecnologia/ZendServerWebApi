<?php
return array (
        'console' => array (
                'router' => array (
                        'routes' => array (
                                'configurationExport' => array (
                                        'options' => array (
                                                'route' => 'configurationExport [--directivesBlacklist=] [--snapshotName=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationExport'
                                                )
                                        )
                                ),
                                'configurationImport' => array (
                                        'options' => array (
                                                'route' => 'configurationImport --configFile= [--ignoreSystemMismatch=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'configurationImport',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'getSystemInfo' => array (
                                        'options' => array (
                                                'route' => 'getSystemInfo',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'getSystemInfo'
                                                )
                                        )
                                ),
                                'clusterGetServersStatus' => array (
                                        'options' => array (
                                                'route' => 'clusterGetServersStatus [--servers=] [--forec=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'clusterGetServersStatus'
                                                )
                                        )
                                ),
                                'clusterAddServer' => array (
                                        'options' => array (
                                                'route' => 'clusterAddServer --serverName= --serverIp=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'changeServerNameById',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'clusterRemoveServer' => array (
                                        'options' => array (
                                                'route' => 'clusterRemoveServer --serverId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'clusterRemoveServer',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'clusterDisableServer' => array (
                                        'options' => array (
                                                'route' => 'clusterDisableServer --serverId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'clusterDisableServer',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'clusterEnableServer' => array (
                                        'options' => array (
                                                'route' => 'clusterEnableServer --serverId=',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'clusterEnableServer',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'clusterReconfigureServer' => array (
                                        'options' => array (
                                                'route' => 'clusterReconfigureServer --serverId= [--doRestart=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'clusterReconfigureServer',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                ),
                                'restartPHP' => array (
                                        'options' => array (
                                                'route' => 'restartPHP [--servers=] [--force=] [--parallelRestart=]',
                                                'defaults' => array (
                                                        'controller' => 'ZendServerWebApi\Controller\Api',
                                                        'action' => 'restartPHP',
                                                        'apiMethod' => 'post'
                                                )
                                        )
                                )
                        )
                )
        )
);
