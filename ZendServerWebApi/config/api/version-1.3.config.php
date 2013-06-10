<?php
return array(
    'console' => array(
        'router' => array(
            'routes' => array(
                // Adminsitration
                'userAuthentificationSettings' => array(
                    'options' => array(
                        'route' => 'zsapi userAuthentificationSettings --type= --ldap= --password= --confirmNewPassword=',
                        'defaults' => array(
                            'action' => 'userAuthentificationSettings',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'userSetPassword' => array(
                    'options' => array(
                        'route' => 'zsapi userSetPassword --username= --password= --newPassword= --confirmNewPassword=',
                        'defaults' => array(
                            'action' => 'userSetPassword',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'setPassword' => array(
                    'options' => array(
                        'route' => 'zsapi setPassword --password= --newPassword= --confirmNewPassword=',
                        'defaults' => array(
                            'action' => 'userSetPassword',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'apiKeysGetList' => array(
                    'options' => array(
                        'route' => 'zsapi apiKeysGetList',
                        'defaults' => array(
                            'action' => 'apiKeysGetList'
                        )
                    )
                ),
                'apiKeysAddKey' => array(
                    'options' => array(
                        'route' => 'zsapi apiKeysAddKey --name= --username=',
                        'defaults' => array(
                            'action' => 'apiKeysAddKey',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'apiKeysRemoveKey' => array(
                    'options' => array(
                        'route' => 'zsapi apiKeysRemoveKey --ids=',
                        'defaults' => array(
                            'action' => 'apiKeysRemoveKey',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'serverValidateLicense' => array(
                    'options' => array(
                        'route' => 'zsapi serverValidateLicense --licenseName= --licenseValue=',
                        'defaults' => array(
                            'action' => 'serverValidateLicense',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'aclSetGroups' => array(
                    'options' => array(
                        'route' => 'zsapi aclSetGroups --role_groups= [--app_groups=]',
                        'defaults' => array(
                            'action' => 'aclSetGroups',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'bootstrapSingleserver' => array(
                    'options' => array(
                        'route' => 'zsapi bootstrapSingleserver [--production=] --adminPassword= [--applicationUrl=] [--adminEmail=] [--developerPassword=] [--orderNumber=] [--licenseKey=] --acceptEula=',
                        'defaults' => array(
                            'action' => 'bootstrapSingleserver',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'serverStoreLicense' => array(
                    'options' => array(
                        'route' => 'zsapi serverStoreLicense --licenseName= --licenseValue=',
                        'defaults' => array(
                            'action' => 'serverStoreLicense',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Audit
                'auditGetList' => array(
                    'options' => array(
                        'route' => 'zsapi auditGetList [--limit=] [--offset=] [--order=] [--direction=] [--filter=]',
                        'defaults' => array(
                            'action' => 'auditGetList'
                        )
                    )
                ),
                'auditGetDetails' => array(
                    'options' => array(
                        'route' => 'zsapi auditGetDetails --auditId=',
                        'defaults' => array(
                            'action' => 'auditGetDetails'
                        )
                    )
                ),
                'auditSetSettings' => array(
                    'options' => array(
                        'route' => 'zsapi auditSetSettings --history= [--email=] [--callbackUrl=]',
                        'defaults' => array(
                            'action' => 'auditSetSettings',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Cache
                'cacheClear' => array(
                    'options' => array(
                        'route' => 'zsapi cacheClear --component=',
                        'defaults' => array(
                            'action' => 'cacheClear',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Configuration Management
                'emailSend' => array(
                    'options' => array(
                        'route' => 'zsapi emailSend --to= [--toName=] --from= [--fromName=] --subject= --templateName= [--templateParams=] [--headers=] [--html=]',
                        'defaults' => array(
                            'action' => 'emailSend',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'configurationExtensionsOn' => array(
                    'options' => array(
                        'route' => 'zsapi configurationExtensionsOn --extensions=',
                        'defaults' => array(
                            'action' => 'configurationExtensionsOn',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'configurationExtensionsOff' => array(
                    'options' => array(
                        'route' => 'zsapi configurationExtensionsOff --extensions=',
                        'defaults' => array(
                            'action' => 'configurationExtensionsOff',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'configurationValidateDirectives' => array(
                    'options' => array(
                        'route' => 'zsapi configurationValidateDirectives --directives=',
                        'defaults' => array(
                            'action' => 'configurationValidateDirectives'
                        )
                    )
                ),
                'configurationStoreDirectives' => array(
                    'options' => array(
                        'route' => 'zsapi configurationStoreDirectives --directives=',
                        'defaults' => array(
                            'action' => 'configurationStoreDirectives',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'configurationSearch' => array(
                    'options' => array(
                        'route' => 'zsapi configurationSearch --query= [--filter=]',
                        'defaults' => array(
                            'action' => 'configurationSearch'
                        )
                    )
                ),
                'configurationExtensionsList' => array(
                    'options' => array(
                        'route' => 'zsapi configurationExtensionsList [--type=] [--order=] [--direction=] [--filter=]',
                        'defaults' => array(
                            'action' => 'configurationExtensionsList'
                        )
                    )
                ),
                'configurationDirectivesList' => array(
                    'options' => array(
                        'route' => 'zsapi configurationDirectivesList [--extension=] [--daemon=] [--filter=]',
                        'defaults' => array(
                            'action' => 'configurationDirectivesList'
                        )
                    )
                ),
                
                'configurationComponentsList' => array(
                    'options' => array(
                        'route' => 'zsapi configurationComponentsList [--filter=]',
                        'defaults' => array(
                            'action' => 'configurationComponentsList'
                        )
                    )
                ),
                'configurationRevertChanges' => array(
                    'options' => array(
                        'route' => 'zsapi configurationRevertChanges --serverId= [--doRestart=]',
                        'defaults' => array(
                            'action' => 'configurationRevertChanges',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'configurationApplyChanges' => array(
                    'options' => array(
                        'route' => 'zsapi configurationApplyChanges --serverId=',
                        'defaults' => array(
                            'action' => 'configurationApplyChanges',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'configurationReset' => array(
                    'options' => array(
                        'route' => 'zsapi configurationReset --configFile= [--ignoreSystemMismatch=]',
                        'defaults' => array(
                            'action' => 'configurationReset',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Deployment
                'applicationGetDetails' => array(
                    'options' => array(
                        'route' => 'zsapi applicationGetDetails --application=',
                        'defaults' => array(
                            'action' => 'applicationGetDetails'
                        )
                    )
                ),
                'redeployAllApplications' => array(
                    'options' => array(
                        'route' => 'zsapi redeployAllApplications [--servers=]',
                        'defaults' => array(
                            'action' => 'redeployAllApplications',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                
                'applicationDefine' => array(
                    'options' => array(
                        'route' => 'zsapi applicationDefine --name= --baseUrl= [--version=] [--healthCheck=] [--logo=]',
                        'defaults' => array(
                            'action' => 'applicationDefine',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Filter
                'filterGetByType' => array(
                    'options' => array(
                        'route' => 'zsapi filterGetByType --type=',
                        'defaults' => array(
                            'action' => 'filterGetByType'
                        )
                    )
                ),
                'filterSave' => array(
                    'options' => array(
                        'route' => 'zsapi filterSave --type= --name= [--data=] [--id=]',
                        'defaults' => array(
                            'action' => 'filterSave'
                        )
                    )
                ),
                'filterDelete' => array(
                    'options' => array(
                        'route' => 'zsapi filterDelete --name=',
                        'defaults' => array(
                            'action' => 'filterDelete'
                        )
                    )
                ),
                // Job Queue
                'jobqueueStatistics' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueStatistics',
                        'defaults' => array(
                            'action' => 'jobqueueStatistics'
                        )
                    )
                ),
                'jobqueueJobsList' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueJobsList [--limit=] [--offset=] [--orderBy=] [--direction=] [--filter=]',
                        'defaults' => array(
                            'action' => 'jobqueueJobsList'
                        )
                    )
                ),
                'jobqueueJobInfo' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueJobInfo --id=',
                        'defaults' => array(
                            'action' => 'jobqueueJobInfo'
                        )
                    )
                ),
                'jobqueueDeleteJobs' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueDeleteJobs --jobs=',
                        'defaults' => array(
                            'action' => 'jobqueueDeleteJobs',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'jobqueueRequeueJobs' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueRequeueJobs --jobs=',
                        'defaults' => array(
                            'action' => 'jobqueueRequeueJobs',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'jobqueueListRules' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueListRules [--limit=] [--offset=] [--orderBy=] [--direction=]',
                        'defaults' => array(
                            'action' => 'jobqueueListRules'
                        )
                    )
                ),
                'jobqueueRuleInfo' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueRuleInfo [--limit=] [--offset=] [--orderBy=] [--direction=] --id=',
                        'defaults' => array(
                            'action' => 'jobqueueRuleInfo'
                        )
                    )
                ),
                'jobqueueSaveRule' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueSaveRule --url= --options= [--vars=]',
                        'defaults' => array(
                            'action' => 'jobqueueSaveRule',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'jobqueueSuspendRules' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueSuspendRules --rules=',
                        'defaults' => array(
                            'action' => 'jobqueueSuspendRules',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'jobqueueResumeRules' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueResumeRules --rules=',
                        'defaults' => array(
                            'action' => 'jobqueueResumeRules',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'jobqueueDeleteRules' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueDeleteRules --rules=',
                        'defaults' => array(
                            'action' => 'jobqueueDeleteRules',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'jobqueueRunNowRule' => array(
                    'options' => array(
                        'route' => 'zsapi jobqueueRunNowRule --rule=',
                        'defaults' => array(
                            'action' => 'jobqueueRunNowRule',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Monitor
                
                'monitorCountIssuesListPredefinedFilter' => array(
                    'options' => array(
                        'route' => 'zsapi monitorCountIssuesListPredefinedFilter --filterId= [--filters=]',
                        'defaults' => array(
                            'action' => 'monitorCountIssuesListPredefinedFilter'
                        )
                    )
                ),
                
                'getBacktraceFile' => array(
                    'options' => array(
                        'route' => 'zsapi getBacktraceFile --backtraceNum= --eventsGroupId=',
                        'defaults' => array(
                            'action' => 'getBacktraceFile'
                        )
                    )
                ),
                
                'monitorDeleteIssuesByPredefinedFilter' => array(
                    'options' => array(
                        'route' => 'zsapi monitorDeleteIssuesByPredefinedFilter --filterId= [--limit=] [--offset=] [--order=] [--direction=] [--filters=]',
                        'defaults' => array(
                            'action' => 'monitorDeleteIssuesByPredefinedFilter',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'monitorDeleteIssues' => array(
                    'options' => array(
                        'route' => 'zsapi monitorDeleteIssues --issueIds=',
                        'defaults' => array(
                            'action' => 'monitorDeleteIssues',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Monitor Rules
                'monitorSetRuleUpdated' => array(
                    'options' => array(
                        'route' => 'zsapi monitorSetRuleUpdated',
                        'defaults' => array(
                            'action' => 'monitorSetRuleUpdated',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'monitorExportRules' => array(
                    'options' => array(
                        'route' => 'zsapi monitorExportRules [--applicationId=]',
                        'defaults' => array(
                            'action' => 'monitorExportRules'
                        )
                    )
                ),
                'monitorImportRules' => array(
                    'options' => array(
                        'route' => 'zsapi monitorImportRules --monitorRules=',
                        'defaults' => array(
                            'action' => 'monitorImportRules',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'monitorGetRulesList' => array(
                    'options' => array(
                        'route' => 'zsapi monitorGetRulesList [--filters=]',
                        'defaults' => array(
                            'action' => 'monitorGetRulesList'
                        )
                    )
                ),
                'monitorEnableRules' => array(
                    'options' => array(
                        'route' => 'zsapi monitorEnableRules --rulesIds=',
                        'defaults' => array(
                            'action' => 'monitorEnableRules',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'monitorDisableRules' => array(
                    'options' => array(
                        'route' => 'zsapi monitorDisableRules --rulesIds=',
                        'defaults' => array(
                            'action' => 'monitorDisableRules',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'monitorSetRule' => array(
                    'options' => array(
                        'route' => 'zsapi monitorSetRule --rulesId= --ruleProperties= [--ruleConditions=] --ruleTriggers=',
                        'defaults' => array(
                            'action' => 'monitorSetRule',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'monitorRemoveRules' => array(
                    'options' => array(
                        'route' => 'zsapi monitorRemoveRules --rulesIds=',
                        'defaults' => array(
                            'action' => 'monitorRemoveRules',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Notification
                'getNotifications' => array(
                    'options' => array(
                        'route' => 'zsapi getNotifications [--hash=]',
                        'defaults' => array(
                            'action' => 'getNotifications'
                        )
                    )
                ),
                'deleteNotification' => array(
                    'options' => array(
                        'route' => 'zsapi deleteNotification --type=',
                        'defaults' => array(
                            'action' => 'deleteNotification',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'updateNotification' => array(
                    'options' => array(
                        'route' => 'zsapi updateNotification --type= [--repeat=]',
                        'defaults' => array(
                            'action' => 'updateNotification',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'sendNotification' => array(
                    'options' => array(
                        'route' => 'zsapi sendNotification --type= --ip=',
                        'defaults' => array(
                            'action' => 'sendNotification',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Server & Cluster Management
                'tasksComplete' => array(
                    'options' => array(
                        'route' => 'zsapi tasksComplete [--servers=] [--tasks=]',
                        'defaults' => array(
                            'action' => 'tasksComplete'
                        )
                    )
                ),
                'getServerInfo' => array(
                    'options' => array(
                        'route' => 'zsapi getServerInfo --serverId=',
                        'defaults' => array(
                            'action' => 'getServerInfo'
                        )
                    )
                ),
                
                'clusterGetServersCount' => array(
                    'options' => array(
                        'route' => 'zsapi clusterGetServersCount',
                        'defaults' => array(
                            'action' => 'clusterGetServersCount'
                        )
                    )
                ),
                
                'serverAddToCluster' => array(
                    'options' => array(
                        'route' => 'zsapi serverAddToCluster --serverName= --dbHost= --dbUsername= --dbPassword= --nodeIp= [--failIfConnected=]',
                        'defaults' => array(
                            'action' => 'serverAddToCluster',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'changeServerNameById' => array(
                    'options' => array(
                        'route' => 'zsapi changeServerNameById --serverName= --serverId=',
                        'defaults' => array(
                            'action' => 'changeServerNameById',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'clusterForceRemoveServer' => array(
                    'options' => array(
                        'route' => 'zsapi clusterForceRemoveServer --serverId=',
                        'defaults' => array(
                            'action' => 'clusterForceRemoveServer',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'restartDaemon' => array(
                    'options' => array(
                        'route' => 'zsapi restartDaemon --daemon= [--servers=]',
                        'defaults' => array(
                            'action' => 'restartDaemon',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'logsReadLines' => array(
                    'options' => array(
                        'route' => 'zsapi logsReadLines --logName= [--serverId=] [--lineToRead=] [--filter=]',
                        'defaults' => array(
                            'action' => 'logsReadLines'
                        )
                    )
                ),
                'logsGetLogfile' => array(
                    'options' => array(
                        'route' => 'zsapi logsGetLogfile --logName= [--serverId=]',
                        'defaults' => array(
                            'action' => 'logsGetLogfile'
                        )
                    )
                ),
                // Statistics
                'statisticsGetSeries' => array(
                    'options' => array(
                        'route' => 'zsapi statisticsGetSeries --type= [--appId=] [--from=] [--to=]',
                        'defaults' => array(
                            'action' => 'statisticsGetSeries'
                        )
                    )
                ),
                'statisticsClearData' => array(
                    'options' => array(
                        'route' => 'zsapi statisticsClearData',
                        'defaults' => array(
                            'action' => 'statisticsClearData',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Studio integration
                'studioStartDebugMode' => array(
                    'options' => array(
                        'route' => 'zsapi studioStartDebugMode --filters= [--options=]',
                        'defaults' => array(
                            'action' => 'studioStartDebugMode',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'studioStopDebugMode' => array(
                    'options' => array(
                        'route' => 'zsapi studioStopDebugMode',
                        'defaults' => array(
                            'action' => 'studioStopDebugMode',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'studioIsDebugModeenabled' => array(
                    'options' => array(
                        'route' => 'zsapi studioIsDebugModeenabled',
                        'defaults' => array(
                            'action' => 'studioIsDebugModeenabled',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                // Page cache
                'pagecacheListRules' => array(
                    'options' => array(
                        'route' => 'zsapi pagecacheListRules [--applicationsId=] [--freeText=]',
                        'defaults' => array(
                            'action' => 'pagecacheListRules'
                        )
                    )
                ),
                'pagecacheSaveRule' => array(
                    'options' => array(
                        'route' => 'zsapi pagecacheSaveRule [--ruleId=] --urlScheme= --urlHost= --urlPath= --matchType= --lifetime= [--compress=] [--name=] [--conditionsType=] [--conditions=] [--splitBy=]',
                        'defaults' => array(
                            'action' => 'pagecacheSaveRule',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'pagecacheSaveApplicationRule' => array(
                    'options' => array(
                        'route' => 'zsapi pagecacheSaveApplicationRule [--ruleId=] --urlPath= --matchType= --lifetime= [--compress=] [--name=] --applicationId [--conditionsType=] [--conditions=] [--splitBy=]',
                        'defaults' => array(
                            'action' => 'pagecacheSaveApplicationRule',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'pagecacheDeleteRules' => array(
                    'options' => array(
                        'route' => 'zsapi pagecacheDeleteRules [--rules=]',
                        'defaults' => array(
                            'action' => 'pagecacheListRules'
                        )
                    )
                ),
                'pagecacheRuleInfo' => array(
                    'options' => array(
                        'route' => 'zsapi pagecacheRuleInfo --id=',
                        'defaults' => array(
                            'action' => 'pagecacheRuleInfo'
                        )
                    )
                ),
                'pagecacheClearCacheByRuleName' => array(
                    'options' => array(
                        'route' => 'zsapi pagecacheClearCacheByRuleName --ruleName=',
                        'defaults' => array(
                            'action' => 'pagecacheClearCacheByRuleName',
                            'apiMethod' => 'post'
                        )
                    )
                ),
                'pagecacheClearRulesCache' => array(
                    'options' => array(
                        'route' => 'zsapi pagecacheClearRulesCache --rules=',
                        'defaults' => array(
                            'action' => 'pagecacheClearRulesCache',
                            'apiMethod' => 'post'
                        )
                    )
                )
            )
        )
    )
);
