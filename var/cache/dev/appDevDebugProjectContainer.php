<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'aws\\acm\\acmclient' => 'Aws\\Acm\\AcmClient',
            'aws\\apigateway\\apigatewayclient' => 'Aws\\ApiGateway\\ApiGatewayClient',
            'aws\\applicationautoscaling\\applicationautoscalingclient' => 'Aws\\ApplicationAutoScaling\\ApplicationAutoScalingClient',
            'aws\\applicationdiscoveryservice\\applicationdiscoveryserviceclient' => 'Aws\\ApplicationDiscoveryService\\ApplicationDiscoveryServiceClient',
            'aws\\appstream\\appstreamclient' => 'Aws\\Appstream\\AppstreamClient',
            'aws\\athena\\athenaclient' => 'Aws\\Athena\\AthenaClient',
            'aws\\autoscaling\\autoscalingclient' => 'Aws\\AutoScaling\\AutoScalingClient',
            'aws\\batch\\batchclient' => 'Aws\\Batch\\BatchClient',
            'aws\\budgets\\budgetsclient' => 'Aws\\Budgets\\BudgetsClient',
            'aws\\clouddirectory\\clouddirectoryclient' => 'Aws\\CloudDirectory\\CloudDirectoryClient',
            'aws\\cloudformation\\cloudformationclient' => 'Aws\\CloudFormation\\CloudFormationClient',
            'aws\\cloudfront\\cloudfrontclient' => 'Aws\\CloudFront\\CloudFrontClient',
            'aws\\cloudhsm\\cloudhsmclient' => 'Aws\\CloudHsm\\CloudHsmClient',
            'aws\\cloudhsmv2\\cloudhsmv2client' => 'Aws\\CloudHSMV2\\CloudHSMV2Client',
            'aws\\cloudsearch\\cloudsearchclient' => 'Aws\\CloudSearch\\CloudSearchClient',
            'aws\\cloudsearchdomain\\cloudsearchdomainclient' => 'Aws\\CloudSearchDomain\\CloudSearchDomainClient',
            'aws\\cloudtrail\\cloudtrailclient' => 'Aws\\CloudTrail\\CloudTrailClient',
            'aws\\cloudwatch\\cloudwatchclient' => 'Aws\\CloudWatch\\CloudWatchClient',
            'aws\\cloudwatchevents\\cloudwatcheventsclient' => 'Aws\\CloudWatchEvents\\CloudWatchEventsClient',
            'aws\\cloudwatchlogs\\cloudwatchlogsclient' => 'Aws\\CloudWatchLogs\\CloudWatchLogsClient',
            'aws\\codebuild\\codebuildclient' => 'Aws\\CodeBuild\\CodeBuildClient',
            'aws\\codecommit\\codecommitclient' => 'Aws\\CodeCommit\\CodeCommitClient',
            'aws\\codedeploy\\codedeployclient' => 'Aws\\CodeDeploy\\CodeDeployClient',
            'aws\\codepipeline\\codepipelineclient' => 'Aws\\CodePipeline\\CodePipelineClient',
            'aws\\codestar\\codestarclient' => 'Aws\\CodeStar\\CodeStarClient',
            'aws\\cognitoidentity\\cognitoidentityclient' => 'Aws\\CognitoIdentity\\CognitoIdentityClient',
            'aws\\cognitoidentityprovider\\cognitoidentityproviderclient' => 'Aws\\CognitoIdentityProvider\\CognitoIdentityProviderClient',
            'aws\\cognitosync\\cognitosyncclient' => 'Aws\\CognitoSync\\CognitoSyncClient',
            'aws\\configservice\\configserviceclient' => 'Aws\\ConfigService\\ConfigServiceClient',
            'aws\\costandusagereportservice\\costandusagereportserviceclient' => 'Aws\\CostandUsageReportService\\CostandUsageReportServiceClient',
            'aws\\databasemigrationservice\\databasemigrationserviceclient' => 'Aws\\DatabaseMigrationService\\DatabaseMigrationServiceClient',
            'aws\\datapipeline\\datapipelineclient' => 'Aws\\DataPipeline\\DataPipelineClient',
            'aws\\dax\\daxclient' => 'Aws\\DAX\\DAXClient',
            'aws\\devicefarm\\devicefarmclient' => 'Aws\\DeviceFarm\\DeviceFarmClient',
            'aws\\directconnect\\directconnectclient' => 'Aws\\DirectConnect\\DirectConnectClient',
            'aws\\directoryservice\\directoryserviceclient' => 'Aws\\DirectoryService\\DirectoryServiceClient',
            'aws\\dynamodb\\dynamodbclient' => 'Aws\\DynamoDb\\DynamoDbClient',
            'aws\\dynamodbstreams\\dynamodbstreamsclient' => 'Aws\\DynamoDbStreams\\DynamoDbStreamsClient',
            'aws\\ec2\\ec2client' => 'Aws\\Ec2\\Ec2Client',
            'aws\\ecr\\ecrclient' => 'Aws\\Ecr\\EcrClient',
            'aws\\ecs\\ecsclient' => 'Aws\\Ecs\\EcsClient',
            'aws\\efs\\efsclient' => 'Aws\\Efs\\EfsClient',
            'aws\\elasticache\\elasticacheclient' => 'Aws\\ElastiCache\\ElastiCacheClient',
            'aws\\elasticbeanstalk\\elasticbeanstalkclient' => 'Aws\\ElasticBeanstalk\\ElasticBeanstalkClient',
            'aws\\elasticloadbalancing\\elasticloadbalancingclient' => 'Aws\\ElasticLoadBalancing\\ElasticLoadBalancingClient',
            'aws\\elasticloadbalancingv2\\elasticloadbalancingv2client' => 'Aws\\ElasticLoadBalancingV2\\ElasticLoadBalancingV2Client',
            'aws\\elasticsearchservice\\elasticsearchserviceclient' => 'Aws\\ElasticsearchService\\ElasticsearchServiceClient',
            'aws\\elastictranscoder\\elastictranscoderclient' => 'Aws\\ElasticTranscoder\\ElasticTranscoderClient',
            'aws\\emr\\emrclient' => 'Aws\\Emr\\EmrClient',
            'aws\\firehose\\firehoseclient' => 'Aws\\Firehose\\FirehoseClient',
            'aws\\gamelift\\gameliftclient' => 'Aws\\GameLift\\GameLiftClient',
            'aws\\glacier\\glacierclient' => 'Aws\\Glacier\\GlacierClient',
            'aws\\glue\\glueclient' => 'Aws\\Glue\\GlueClient',
            'aws\\greengrass\\greengrassclient' => 'Aws\\Greengrass\\GreengrassClient',
            'aws\\health\\healthclient' => 'Aws\\Health\\HealthClient',
            'aws\\iam\\iamclient' => 'Aws\\Iam\\IamClient',
            'aws\\importexport\\importexportclient' => 'Aws\\ImportExport\\ImportExportClient',
            'aws\\inspector\\inspectorclient' => 'Aws\\Inspector\\InspectorClient',
            'aws\\iot\\iotclient' => 'Aws\\Iot\\IotClient',
            'aws\\iotdataplane\\iotdataplaneclient' => 'Aws\\IotDataPlane\\IotDataPlaneClient',
            'aws\\kinesis\\kinesisclient' => 'Aws\\Kinesis\\KinesisClient',
            'aws\\kinesisanalytics\\kinesisanalyticsclient' => 'Aws\\KinesisAnalytics\\KinesisAnalyticsClient',
            'aws\\kms\\kmsclient' => 'Aws\\Kms\\KmsClient',
            'aws\\lambda\\lambdaclient' => 'Aws\\Lambda\\LambdaClient',
            'aws\\lexmodelbuildingservice\\lexmodelbuildingserviceclient' => 'Aws\\LexModelBuildingService\\LexModelBuildingServiceClient',
            'aws\\lexruntimeservice\\lexruntimeserviceclient' => 'Aws\\LexRuntimeService\\LexRuntimeServiceClient',
            'aws\\lightsail\\lightsailclient' => 'Aws\\Lightsail\\LightsailClient',
            'aws\\machinelearning\\machinelearningclient' => 'Aws\\MachineLearning\\MachineLearningClient',
            'aws\\marketplacecommerceanalytics\\marketplacecommerceanalyticsclient' => 'Aws\\MarketplaceCommerceAnalytics\\MarketplaceCommerceAnalyticsClient',
            'aws\\marketplaceentitlementservice\\marketplaceentitlementserviceclient' => 'Aws\\MarketplaceEntitlementService\\MarketplaceEntitlementServiceClient',
            'aws\\marketplacemetering\\marketplacemeteringclient' => 'Aws\\MarketplaceMetering\\MarketplaceMeteringClient',
            'aws\\migrationhub\\migrationhubclient' => 'Aws\\MigrationHub\\MigrationHubClient',
            'aws\\mobile\\mobileclient' => 'Aws\\Mobile\\MobileClient',
            'aws\\mturk\\mturkclient' => 'Aws\\MTurk\\MTurkClient',
            'aws\\opsworks\\opsworksclient' => 'Aws\\OpsWorks\\OpsWorksClient',
            'aws\\opsworkscm\\opsworkscmclient' => 'Aws\\OpsWorksCM\\OpsWorksCMClient',
            'aws\\organizations\\organizationsclient' => 'Aws\\Organizations\\OrganizationsClient',
            'aws\\pinpoint\\pinpointclient' => 'Aws\\Pinpoint\\PinpointClient',
            'aws\\polly\\pollyclient' => 'Aws\\Polly\\PollyClient',
            'aws\\rds\\rdsclient' => 'Aws\\Rds\\RdsClient',
            'aws\\redshift\\redshiftclient' => 'Aws\\Redshift\\RedshiftClient',
            'aws\\rekognition\\rekognitionclient' => 'Aws\\Rekognition\\RekognitionClient',
            'aws\\resourcegroupstaggingapi\\resourcegroupstaggingapiclient' => 'Aws\\ResourceGroupsTaggingAPI\\ResourceGroupsTaggingAPIClient',
            'aws\\route53\\route53client' => 'Aws\\Route53\\Route53Client',
            'aws\\route53domains\\route53domainsclient' => 'Aws\\Route53Domains\\Route53DomainsClient',
            'aws\\s3\\s3client' => 'Aws\\S3\\S3Client',
            'aws\\servicecatalog\\servicecatalogclient' => 'Aws\\ServiceCatalog\\ServiceCatalogClient',
            'aws\\ses\\sesclient' => 'Aws\\Ses\\SesClient',
            'aws\\sfn\\sfnclient' => 'Aws\\Sfn\\SfnClient',
            'aws\\shield\\shieldclient' => 'Aws\\Shield\\ShieldClient',
            'aws\\sms\\smsclient' => 'Aws\\Sms\\SmsClient',
            'aws\\snowball\\snowballclient' => 'Aws\\SnowBall\\SnowBallClient',
            'aws\\sns\\snsclient' => 'Aws\\Sns\\SnsClient',
            'aws\\sqs\\sqsclient' => 'Aws\\Sqs\\SqsClient',
            'aws\\ssm\\ssmclient' => 'Aws\\Ssm\\SsmClient',
            'aws\\storagegateway\\storagegatewayclient' => 'Aws\\StorageGateway\\StorageGatewayClient',
            'aws\\sts\\stsclient' => 'Aws\\Sts\\StsClient',
            'aws\\support\\supportclient' => 'Aws\\Support\\SupportClient',
            'aws\\swf\\swfclient' => 'Aws\\Swf\\SwfClient',
            'aws\\waf\\wafclient' => 'Aws\\Waf\\WafClient',
            'aws\\wafregional\\wafregionalclient' => 'Aws\\WafRegional\\WafRegionalClient',
            'aws\\workdocs\\workdocsclient' => 'Aws\\WorkDocs\\WorkDocsClient',
            'aws\\workspaces\\workspacesclient' => 'Aws\\WorkSpaces\\WorkSpacesClient',
            'aws\\xray\\xrayclient' => 'Aws\\XRay\\XRayClient',
            'oneup_uploader.controller.customuploader' => 'oneup_uploader.controller.CustomUploader',
        );
        $this->methodMap = array(
            '1_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f' => 'get1176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12fService',
            '2_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f' => 'get2176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12fService',
            'action.user.create' => 'getAction_User_CreateService',
            'action.user.delete' => 'getAction_User_DeleteService',
            'action.user.fetch' => 'getAction_User_FetchService',
            'action.user.fetch_account' => 'getAction_User_FetchAccountService',
            'action.user.fetch_current' => 'getAction_User_FetchCurrentService',
            'action.user.forgot_password' => 'getAction_User_ForgotPasswordService',
            'action.user.list' => 'getAction_User_ListService',
            'action.user.reset_password' => 'getAction_User_ResetPasswordService',
            'action.user.social_login' => 'getAction_User_SocialLoginService',
            'action.user.update' => 'getAction_User_UpdateService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'app.aws.uploader.storage' => 'getApp_Aws_Uploader_StorageService',
            'app.aws.uploader.storage_base_64' => 'getApp_Aws_Uploader_StorageBase64Service',
            'app.service.reset_password' => 'getApp_Service_ResetPasswordService',
            'app.upload_listener' => 'getApp_UploadListenerService',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService',
            'argument_resolver.request' => 'getArgumentResolver_RequestService',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService',
            'argument_resolver.session' => 'getArgumentResolver_SessionService',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'auth.security.user_provider' => 'getAuth_Security_UserProviderService',
            'aws.acm' => 'getAws_AcmService',
            'aws.apigateway' => 'getAws_ApigatewayService',
            'aws.applicationautoscaling' => 'getAws_ApplicationautoscalingService',
            'aws.applicationdiscoveryservice' => 'getAws_ApplicationdiscoveryserviceService',
            'aws.appstream' => 'getAws_AppstreamService',
            'aws.athena' => 'getAws_AthenaService',
            'aws.autoscaling' => 'getAws_AutoscalingService',
            'aws.batch' => 'getAws_BatchService',
            'aws.budgets' => 'getAws_BudgetsService',
            'aws.clouddirectory' => 'getAws_ClouddirectoryService',
            'aws.cloudformation' => 'getAws_CloudformationService',
            'aws.cloudfront' => 'getAws_CloudfrontService',
            'aws.cloudhsm' => 'getAws_CloudhsmService',
            'aws.cloudhsmv2' => 'getAws_Cloudhsmv2Service',
            'aws.cloudsearch' => 'getAws_CloudsearchService',
            'aws.cloudsearchdomain' => 'getAws_CloudsearchdomainService',
            'aws.cloudtrail' => 'getAws_CloudtrailService',
            'aws.cloudwatch' => 'getAws_CloudwatchService',
            'aws.cloudwatchevents' => 'getAws_CloudwatcheventsService',
            'aws.cloudwatchlogs' => 'getAws_CloudwatchlogsService',
            'aws.codebuild' => 'getAws_CodebuildService',
            'aws.codecommit' => 'getAws_CodecommitService',
            'aws.codedeploy' => 'getAws_CodedeployService',
            'aws.codepipeline' => 'getAws_CodepipelineService',
            'aws.codestar' => 'getAws_CodestarService',
            'aws.cognitoidentity' => 'getAws_CognitoidentityService',
            'aws.cognitoidentityprovider' => 'getAws_CognitoidentityproviderService',
            'aws.cognitosync' => 'getAws_CognitosyncService',
            'aws.configservice' => 'getAws_ConfigserviceService',
            'aws.costandusagereportservice' => 'getAws_CostandusagereportserviceService',
            'aws.databasemigrationservice' => 'getAws_DatabasemigrationserviceService',
            'aws.datapipeline' => 'getAws_DatapipelineService',
            'aws.dax' => 'getAws_DaxService',
            'aws.devicefarm' => 'getAws_DevicefarmService',
            'aws.directconnect' => 'getAws_DirectconnectService',
            'aws.directoryservice' => 'getAws_DirectoryserviceService',
            'aws.dynamodb' => 'getAws_DynamodbService',
            'aws.dynamodbstreams' => 'getAws_DynamodbstreamsService',
            'aws.ec2' => 'getAws_Ec2Service',
            'aws.ecr' => 'getAws_EcrService',
            'aws.ecs' => 'getAws_EcsService',
            'aws.efs' => 'getAws_EfsService',
            'aws.elasticache' => 'getAws_ElasticacheService',
            'aws.elasticbeanstalk' => 'getAws_ElasticbeanstalkService',
            'aws.elasticloadbalancing' => 'getAws_ElasticloadbalancingService',
            'aws.elasticloadbalancingv2' => 'getAws_Elasticloadbalancingv2Service',
            'aws.elasticsearchservice' => 'getAws_ElasticsearchserviceService',
            'aws.elastictranscoder' => 'getAws_ElastictranscoderService',
            'aws.emr' => 'getAws_EmrService',
            'aws.firehose' => 'getAws_FirehoseService',
            'aws.gamelift' => 'getAws_GameliftService',
            'aws.glacier' => 'getAws_GlacierService',
            'aws.glue' => 'getAws_GlueService',
            'aws.greengrass' => 'getAws_GreengrassService',
            'aws.health' => 'getAws_HealthService',
            'aws.iam' => 'getAws_IamService',
            'aws.importexport' => 'getAws_ImportexportService',
            'aws.inspector' => 'getAws_InspectorService',
            'aws.iot' => 'getAws_IotService',
            'aws.iotdataplane' => 'getAws_IotdataplaneService',
            'aws.kinesis' => 'getAws_KinesisService',
            'aws.kinesisanalytics' => 'getAws_KinesisanalyticsService',
            'aws.kms' => 'getAws_KmsService',
            'aws.lambda' => 'getAws_LambdaService',
            'aws.lexmodelbuildingservice' => 'getAws_LexmodelbuildingserviceService',
            'aws.lexruntimeservice' => 'getAws_LexruntimeserviceService',
            'aws.lightsail' => 'getAws_LightsailService',
            'aws.machinelearning' => 'getAws_MachinelearningService',
            'aws.marketplacecommerceanalytics' => 'getAws_MarketplacecommerceanalyticsService',
            'aws.marketplaceentitlementservice' => 'getAws_MarketplaceentitlementserviceService',
            'aws.marketplacemetering' => 'getAws_MarketplacemeteringService',
            'aws.migrationhub' => 'getAws_MigrationhubService',
            'aws.mobile' => 'getAws_MobileService',
            'aws.mturk' => 'getAws_MturkService',
            'aws.opsworks' => 'getAws_OpsworksService',
            'aws.opsworkscm' => 'getAws_OpsworkscmService',
            'aws.organizations' => 'getAws_OrganizationsService',
            'aws.pinpoint' => 'getAws_PinpointService',
            'aws.polly' => 'getAws_PollyService',
            'aws.rds' => 'getAws_RdsService',
            'aws.redshift' => 'getAws_RedshiftService',
            'aws.rekognition' => 'getAws_RekognitionService',
            'aws.resourcegroupstaggingapi' => 'getAws_ResourcegroupstaggingapiService',
            'aws.route53' => 'getAws_Route53Service',
            'aws.route53domains' => 'getAws_Route53domainsService',
            'aws.s3' => 'getAws_S3Service',
            'aws.servicecatalog' => 'getAws_ServicecatalogService',
            'aws.ses' => 'getAws_SesService',
            'aws.sfn' => 'getAws_SfnService',
            'aws.shield' => 'getAws_ShieldService',
            'aws.sms' => 'getAws_SmsService',
            'aws.snowball' => 'getAws_SnowballService',
            'aws.sns' => 'getAws_SnsService',
            'aws.sqs' => 'getAws_SqsService',
            'aws.ssm' => 'getAws_SsmService',
            'aws.storagegateway' => 'getAws_StoragegatewayService',
            'aws.sts' => 'getAws_StsService',
            'aws.support' => 'getAws_SupportService',
            'aws.swf' => 'getAws_SwfService',
            'aws.waf' => 'getAws_WafService',
            'aws.wafregional' => 'getAws_WafregionalService',
            'aws.workdocs' => 'getAws_WorkdocsService',
            'aws.workspaces' => 'getAws_WorkspacesService',
            'aws.xray' => 'getAws_XrayService',
            'aws_sdk' => 'getAwsSdkService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.annotations.recorder_inner' => 'getCache_Annotations_RecorderInnerService',
            'cache.app' => 'getCache_AppService',
            'cache.app.recorder_inner' => 'getCache_App_RecorderInnerService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.global_clearer' => 'getCache_GlobalClearerService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.serializer.recorder_inner' => 'getCache_Serializer_RecorderInnerService',
            'cache.system' => 'getCache_SystemService',
            'cache.system.recorder_inner' => 'getCache_System_RecorderInnerService',
            'cache.validator' => 'getCache_ValidatorService',
            'cache.validator.recorder_inner' => 'getCache_Validator_RecorderInnerService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService',
            'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService',
            'console.error_listener' => 'getConsole_ErrorListenerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'core.json_decode_listener' => 'getCore_JsonDecodeListenerService',
            'core.listener.exception' => 'getCore_Listener_ExceptionService',
            'core.normalizer.form_error' => 'getCore_Normalizer_FormErrorService',
            'core.normalizer.pagerfanta' => 'getCore_Normalizer_PagerfantaService',
            'core.resourse.attribute_extraction_strategy' => 'getCore_Resourse_AttributeExtractionStrategyService',
            'core.resourse.metadata_factory' => 'getCore_Resourse_MetadataFactoryService',
            'core.util.error_factory' => 'getCore_Util_ErrorFactoryService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'filter.filter_expander' => 'getFilter_FilterExpanderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_oauth_server.access_token_manager.default' => 'getFosOauthServer_AccessTokenManager_DefaultService',
            'fos_oauth_server.auth_code_manager.default' => 'getFosOauthServer_AuthCodeManager_DefaultService',
            'fos_oauth_server.authorize.form' => 'getFosOauthServer_Authorize_FormService',
            'fos_oauth_server.authorize.form.handler.default' => 'getFosOauthServer_Authorize_Form_Handler_DefaultService',
            'fos_oauth_server.authorize.form.type' => 'getFosOauthServer_Authorize_Form_TypeService',
            'fos_oauth_server.client_manager.default' => 'getFosOauthServer_ClientManager_DefaultService',
            'fos_oauth_server.controller.token' => 'getFosOauthServer_Controller_TokenService',
            'fos_oauth_server.entity_manager' => 'getFosOauthServer_EntityManagerService',
            'fos_oauth_server.refresh_token_manager.default' => 'getFosOauthServer_RefreshTokenManager_DefaultService',
            'fos_oauth_server.server' => 'getFosOauthServer_ServerService',
            'fos_oauth_server.storage' => 'getFosOauthServer_StorageService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.handler.server_log' => 'getMonolog_Handler_ServerLogService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'nelmio_api_doc.doc_comment_extractor' => 'getNelmioApiDoc_DocCommentExtractorService',
            'nelmio_api_doc.event_listener.request' => 'getNelmioApiDoc_EventListener_RequestService',
            'nelmio_api_doc.extractor.api_doc_extractor' => 'getNelmioApiDoc_Extractor_ApiDocExtractorService',
            'nelmio_api_doc.form.extension.description_form_type_extension' => 'getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService',
            'nelmio_api_doc.formatter.html_formatter' => 'getNelmioApiDoc_Formatter_HtmlFormatterService',
            'nelmio_api_doc.formatter.markdown_formatter' => 'getNelmioApiDoc_Formatter_MarkdownFormatterService',
            'nelmio_api_doc.formatter.simple_formatter' => 'getNelmioApiDoc_Formatter_SimpleFormatterService',
            'nelmio_api_doc.formatter.swagger_formatter' => 'getNelmioApiDoc_Formatter_SwaggerFormatterService',
            'nelmio_api_doc.parser.collection_parser' => 'getNelmioApiDoc_Parser_CollectionParserService',
            'nelmio_api_doc.parser.form_errors_parser' => 'getNelmioApiDoc_Parser_FormErrorsParserService',
            'nelmio_api_doc.parser.form_type_parser' => 'getNelmioApiDoc_Parser_FormTypeParserService',
            'nelmio_api_doc.parser.json_serializable_parser' => 'getNelmioApiDoc_Parser_JsonSerializableParserService',
            'nelmio_api_doc.parser.validation_parser' => 'getNelmioApiDoc_Parser_ValidationParserService',
            'nelmio_api_doc.twig.extension.extra_markdown' => 'getNelmioApiDoc_Twig_Extension_ExtraMarkdownService',
            'nelmio_cors.cors_listener' => 'getNelmioCors_CorsListenerService',
            'nelmio_cors.options_provider.config' => 'getNelmioCors_OptionsProvider_ConfigService',
            'oneup_uploader.chunk_manager' => 'getOneupUploader_ChunkManagerService',
            'oneup_uploader.chunks_storage' => 'getOneupUploader_ChunksStorageService',
            'oneup_uploader.controller.CustomUploader' => 'getOneupUploader_Controller_CustomUploaderService',
            'oneup_uploader.namer.uniqid' => 'getOneupUploader_Namer_UniqidService',
            'oneup_uploader.namer.urlsafe' => 'getOneupUploader_Namer_UrlsafeService',
            'oneup_uploader.orphanage_manager' => 'getOneupUploader_OrphanageManagerService',
            'oneup_uploader.routing.loader' => 'getOneupUploader_Routing_LoaderService',
            'oneup_uploader.storage.attachments' => 'getOneupUploader_Storage_AttachmentsService',
            'oneup_uploader.templating.uploader_helper' => 'getOneupUploader_Templating_UploaderHelperService',
            'oneup_uploader.twig.extension.uploader' => 'getOneupUploader_Twig_Extension_UploaderService',
            'oneup_uploader.validation_listener.allowed_mimetype' => 'getOneupUploader_ValidationListener_AllowedMimetypeService',
            'oneup_uploader.validation_listener.disallowed_mimetype' => 'getOneupUploader_ValidationListener_DisallowedMimetypeService',
            'oneup_uploader.validation_listener.max_size' => 'getOneupUploader_ValidationListener_MaxSizeService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'requestum_email_sender' => 'getRequestumEmailSenderService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.provider.anonymous.api_registration' => 'getSecurity_Authentication_Provider_Anonymous_ApiRegistrationService',
            'security.authentication.provider.anonymous.api_reset_password' => 'getSecurity_Authentication_Provider_Anonymous_ApiResetPasswordService',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService',
            'security.authentication.provider.anonymous.oauth_authorize' => 'getSecurity_Authentication_Provider_Anonymous_OauthAuthorizeService',
            'security.authentication.provider.dao.oauth_authorize' => 'getSecurity_Authentication_Provider_Dao_OauthAuthorizeService',
            'security.authentication.provider.fos_oauth_server.api' => 'getSecurity_Authentication_Provider_FosOauthServer_ApiService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.firewall.map.context.api' => 'getSecurity_Firewall_Map_Context_ApiService',
            'security.firewall.map.context.api_doc' => 'getSecurity_Firewall_Map_Context_ApiDocService',
            'security.firewall.map.context.api_registration' => 'getSecurity_Firewall_Map_Context_ApiRegistrationService',
            'security.firewall.map.context.api_reset_password' => 'getSecurity_Firewall_Map_Context_ApiResetPasswordService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.firewall.map.context.oauth_authorize' => 'getSecurity_Firewall_Map_Context_OauthAuthorizeService',
            'security.firewall.map.context.oauth_token' => 'getSecurity_Firewall_Map_Context_OauthTokenService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.request_matcher.3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcec' => 'getSecurity_RequestMatcher_3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcecService',
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => 'getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService',
            'security.request_matcher.645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742e' => 'getSecurity_RequestMatcher_645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742eService',
            'security.request_matcher.97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298' => 'getSecurity_RequestMatcher_97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298Service',
            'security.request_matcher.9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccf' => 'getSecurity_RequestMatcher_9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccfService',
            'security.request_matcher.e32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471' => 'getSecurity_RequestMatcher_E32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471Service',
            'security.request_matcher.e8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3' => 'getSecurity_RequestMatcher_E8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3Service',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user.provider.concrete.in_memory' => 'getSecurity_User_Provider_Concrete_InMemoryService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer' => 'getSerializerService',
            'serializer.mapping.cache.symfony' => 'getSerializer_Mapping_Cache_SymfonyService',
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => 'getServiceLocator_E64d23c3bf770e2cf44b71643280668dService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'stof_doctrine_extensions.uploadable.manager' => 'getStofDoctrineExtensions_Uploadable_ManagerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'user_listener' => 'getUserListenerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'voter.user.owner' => 'getVoter_User_OwnerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->privates = array(
            '1_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f' => true,
            '2_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f' => true,
            'annotations.reader' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'cache.annotations' => true,
            'cache.annotations.recorder_inner' => true,
            'cache.app.recorder_inner' => true,
            'cache.serializer' => true,
            'cache.serializer.recorder_inner' => true,
            'cache.system.recorder_inner' => true,
            'cache.validator' => true,
            'cache.validator.recorder_inner' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'fos_oauth_server.entity_manager' => true,
            'resolve_controller_name_subscriber' => true,
            'router.request_context' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.api_registration' => true,
            'security.authentication.provider.anonymous.api_reset_password' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.anonymous.oauth_authorize' => true,
            'security.authentication.provider.dao.oauth_authorize' => true,
            'security.authentication.provider.fos_oauth_server.api' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.firewall.map' => true,
            'security.http_utils' => true,
            'security.logout_url_generator' => true,
            'security.request_matcher.3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcec' => true,
            'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' => true,
            'security.request_matcher.645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742e' => true,
            'security.request_matcher.97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298' => true,
            'security.request_matcher.9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccf' => true,
            'security.request_matcher.e32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471' => true,
            'security.request_matcher.e8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3' => true,
            'security.role_hierarchy' => true,
            'security.user.provider.concrete.in_memory' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'service_locator.e64d23c3bf770e2cf44b71643280668d' => true,
            'session.storage.metadata_bag' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.locator' => true,
            'web_profiler.csp.handler' => true,
        );
        $this->aliases = array(
            'Aws\\Acm\\AcmClient' => 'aws.acm',
            'Aws\\ApiGateway\\ApiGatewayClient' => 'aws.apigateway',
            'Aws\\ApplicationAutoScaling\\ApplicationAutoScalingClient' => 'aws.applicationautoscaling',
            'Aws\\ApplicationDiscoveryService\\ApplicationDiscoveryServiceClient' => 'aws.applicationdiscoveryservice',
            'Aws\\Appstream\\AppstreamClient' => 'aws.appstream',
            'Aws\\Athena\\AthenaClient' => 'aws.athena',
            'Aws\\AutoScaling\\AutoScalingClient' => 'aws.autoscaling',
            'Aws\\Batch\\BatchClient' => 'aws.batch',
            'Aws\\Budgets\\BudgetsClient' => 'aws.budgets',
            'Aws\\CloudDirectory\\CloudDirectoryClient' => 'aws.clouddirectory',
            'Aws\\CloudFormation\\CloudFormationClient' => 'aws.cloudformation',
            'Aws\\CloudFront\\CloudFrontClient' => 'aws.cloudfront',
            'Aws\\CloudHSMV2\\CloudHSMV2Client' => 'aws.cloudhsmv2',
            'Aws\\CloudHsm\\CloudHsmClient' => 'aws.cloudhsm',
            'Aws\\CloudSearchDomain\\CloudSearchDomainClient' => 'aws.cloudsearchdomain',
            'Aws\\CloudSearch\\CloudSearchClient' => 'aws.cloudsearch',
            'Aws\\CloudTrail\\CloudTrailClient' => 'aws.cloudtrail',
            'Aws\\CloudWatchEvents\\CloudWatchEventsClient' => 'aws.cloudwatchevents',
            'Aws\\CloudWatchLogs\\CloudWatchLogsClient' => 'aws.cloudwatchlogs',
            'Aws\\CloudWatch\\CloudWatchClient' => 'aws.cloudwatch',
            'Aws\\CodeBuild\\CodeBuildClient' => 'aws.codebuild',
            'Aws\\CodeCommit\\CodeCommitClient' => 'aws.codecommit',
            'Aws\\CodeDeploy\\CodeDeployClient' => 'aws.codedeploy',
            'Aws\\CodePipeline\\CodePipelineClient' => 'aws.codepipeline',
            'Aws\\CodeStar\\CodeStarClient' => 'aws.codestar',
            'Aws\\CognitoIdentityProvider\\CognitoIdentityProviderClient' => 'aws.cognitoidentityprovider',
            'Aws\\CognitoIdentity\\CognitoIdentityClient' => 'aws.cognitoidentity',
            'Aws\\CognitoSync\\CognitoSyncClient' => 'aws.cognitosync',
            'Aws\\ConfigService\\ConfigServiceClient' => 'aws.configservice',
            'Aws\\CostandUsageReportService\\CostandUsageReportServiceClient' => 'aws.costandusagereportservice',
            'Aws\\DAX\\DAXClient' => 'aws.dax',
            'Aws\\DataPipeline\\DataPipelineClient' => 'aws.datapipeline',
            'Aws\\DatabaseMigrationService\\DatabaseMigrationServiceClient' => 'aws.databasemigrationservice',
            'Aws\\DeviceFarm\\DeviceFarmClient' => 'aws.devicefarm',
            'Aws\\DirectConnect\\DirectConnectClient' => 'aws.directconnect',
            'Aws\\DirectoryService\\DirectoryServiceClient' => 'aws.directoryservice',
            'Aws\\DynamoDbStreams\\DynamoDbStreamsClient' => 'aws.dynamodbstreams',
            'Aws\\DynamoDb\\DynamoDbClient' => 'aws.dynamodb',
            'Aws\\Ec2\\Ec2Client' => 'aws.ec2',
            'Aws\\Ecr\\EcrClient' => 'aws.ecr',
            'Aws\\Ecs\\EcsClient' => 'aws.ecs',
            'Aws\\Efs\\EfsClient' => 'aws.efs',
            'Aws\\ElastiCache\\ElastiCacheClient' => 'aws.elasticache',
            'Aws\\ElasticBeanstalk\\ElasticBeanstalkClient' => 'aws.elasticbeanstalk',
            'Aws\\ElasticLoadBalancingV2\\ElasticLoadBalancingV2Client' => 'aws.elasticloadbalancingv2',
            'Aws\\ElasticLoadBalancing\\ElasticLoadBalancingClient' => 'aws.elasticloadbalancing',
            'Aws\\ElasticTranscoder\\ElasticTranscoderClient' => 'aws.elastictranscoder',
            'Aws\\ElasticsearchService\\ElasticsearchServiceClient' => 'aws.elasticsearchservice',
            'Aws\\Emr\\EmrClient' => 'aws.emr',
            'Aws\\Firehose\\FirehoseClient' => 'aws.firehose',
            'Aws\\GameLift\\GameLiftClient' => 'aws.gamelift',
            'Aws\\Glacier\\GlacierClient' => 'aws.glacier',
            'Aws\\Glue\\GlueClient' => 'aws.glue',
            'Aws\\Greengrass\\GreengrassClient' => 'aws.greengrass',
            'Aws\\Health\\HealthClient' => 'aws.health',
            'Aws\\Iam\\IamClient' => 'aws.iam',
            'Aws\\ImportExport\\ImportExportClient' => 'aws.importexport',
            'Aws\\Inspector\\InspectorClient' => 'aws.inspector',
            'Aws\\IotDataPlane\\IotDataPlaneClient' => 'aws.iotdataplane',
            'Aws\\Iot\\IotClient' => 'aws.iot',
            'Aws\\KinesisAnalytics\\KinesisAnalyticsClient' => 'aws.kinesisanalytics',
            'Aws\\Kinesis\\KinesisClient' => 'aws.kinesis',
            'Aws\\Kms\\KmsClient' => 'aws.kms',
            'Aws\\Lambda\\LambdaClient' => 'aws.lambda',
            'Aws\\LexModelBuildingService\\LexModelBuildingServiceClient' => 'aws.lexmodelbuildingservice',
            'Aws\\LexRuntimeService\\LexRuntimeServiceClient' => 'aws.lexruntimeservice',
            'Aws\\Lightsail\\LightsailClient' => 'aws.lightsail',
            'Aws\\MTurk\\MTurkClient' => 'aws.mturk',
            'Aws\\MachineLearning\\MachineLearningClient' => 'aws.machinelearning',
            'Aws\\MarketplaceCommerceAnalytics\\MarketplaceCommerceAnalyticsClient' => 'aws.marketplacecommerceanalytics',
            'Aws\\MarketplaceEntitlementService\\MarketplaceEntitlementServiceClient' => 'aws.marketplaceentitlementservice',
            'Aws\\MarketplaceMetering\\MarketplaceMeteringClient' => 'aws.marketplacemetering',
            'Aws\\MigrationHub\\MigrationHubClient' => 'aws.migrationhub',
            'Aws\\Mobile\\MobileClient' => 'aws.mobile',
            'Aws\\OpsWorksCM\\OpsWorksCMClient' => 'aws.opsworkscm',
            'Aws\\OpsWorks\\OpsWorksClient' => 'aws.opsworks',
            'Aws\\Organizations\\OrganizationsClient' => 'aws.organizations',
            'Aws\\Pinpoint\\PinpointClient' => 'aws.pinpoint',
            'Aws\\Polly\\PollyClient' => 'aws.polly',
            'Aws\\Rds\\RdsClient' => 'aws.rds',
            'Aws\\Redshift\\RedshiftClient' => 'aws.redshift',
            'Aws\\Rekognition\\RekognitionClient' => 'aws.rekognition',
            'Aws\\ResourceGroupsTaggingAPI\\ResourceGroupsTaggingAPIClient' => 'aws.resourcegroupstaggingapi',
            'Aws\\Route53Domains\\Route53DomainsClient' => 'aws.route53domains',
            'Aws\\Route53\\Route53Client' => 'aws.route53',
            'Aws\\S3\\S3Client' => 'aws.s3',
            'Aws\\ServiceCatalog\\ServiceCatalogClient' => 'aws.servicecatalog',
            'Aws\\Ses\\SesClient' => 'aws.ses',
            'Aws\\Sfn\\SfnClient' => 'aws.sfn',
            'Aws\\Shield\\ShieldClient' => 'aws.shield',
            'Aws\\Sms\\SmsClient' => 'aws.sms',
            'Aws\\SnowBall\\SnowBallClient' => 'aws.snowball',
            'Aws\\Sns\\SnsClient' => 'aws.sns',
            'Aws\\Sqs\\SqsClient' => 'aws.sqs',
            'Aws\\Ssm\\SsmClient' => 'aws.ssm',
            'Aws\\StorageGateway\\StorageGatewayClient' => 'aws.storagegateway',
            'Aws\\Sts\\StsClient' => 'aws.sts',
            'Aws\\Support\\SupportClient' => 'aws.support',
            'Aws\\Swf\\SwfClient' => 'aws.swf',
            'Aws\\WafRegional\\WafRegionalClient' => 'aws.wafregional',
            'Aws\\Waf\\WafClient' => 'aws.waf',
            'Aws\\WorkDocs\\WorkDocsClient' => 'aws.workdocs',
            'Aws\\WorkSpaces\\WorkSpacesClient' => 'aws.workspaces',
            'Aws\\XRay\\XRayClient' => 'aws.xray',
            'cache.app_clearer' => 'cache.default_clearer',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_oauth_server.access_token_manager' => 'fos_oauth_server.access_token_manager.default',
            'fos_oauth_server.auth_code_manager' => 'fos_oauth_server.auth_code_manager.default',
            'fos_oauth_server.authorize.form.handler' => 'fos_oauth_server.authorize.form.handler.default',
            'fos_oauth_server.client_manager' => 'fos_oauth_server.client_manager.default',
            'fos_oauth_server.refresh_token_manager' => 'fos_oauth_server.refresh_token_manager.default',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'action.user.create' shared service.
     *
     * @return \Requestum\ApiBundle\Action\CreateAction
     */
    protected function getAction_User_CreateService()
    {
        $this->services['action.user.create'] = $instance = new \Requestum\ApiBundle\Action\CreateAction('AppBundle\\Entity\\User', 'AppBundle\\Form\\User\\UserType');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.delete' shared service.
     *
     * @return \Requestum\ApiBundle\Action\DeleteAction
     */
    protected function getAction_User_DeleteService()
    {
        $this->services['action.user.delete'] = $instance = new \Requestum\ApiBundle\Action\DeleteAction('AppBundle\\Entity\\User');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.fetch' shared service.
     *
     * @return \Requestum\ApiBundle\Action\FetchAction
     */
    protected function getAction_User_FetchService()
    {
        $this->services['action.user.fetch'] = $instance = new \Requestum\ApiBundle\Action\FetchAction('AppBundle\\Entity\\User');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.fetch_account' shared service.
     *
     * @return \AppBundle\Action\User\FetchAccountAction
     */
    protected function getAction_User_FetchAccountService()
    {
        $this->services['action.user.fetch_account'] = $instance = new \AppBundle\Action\User\FetchAccountAction('AppBundle\\Entity\\User');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.fetch_current' shared service.
     *
     * @return \AppBundle\Action\User\FetchCurrentAction
     */
    protected function getAction_User_FetchCurrentService()
    {
        $this->services['action.user.fetch_current'] = $instance = new \AppBundle\Action\User\FetchCurrentAction('AppBundle\\Entity\\User');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.forgot_password' shared service.
     *
     * @return \AppBundle\Action\User\ForgotPasswordAction
     */
    protected function getAction_User_ForgotPasswordService()
    {
        $this->services['action.user.forgot_password'] = $instance = new \AppBundle\Action\User\ForgotPasswordAction('AppBundle\\Entity\\User');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.list' shared service.
     *
     * @return \Requestum\ApiBundle\Action\ListAction
     */
    protected function getAction_User_ListService()
    {
        $this->services['action.user.list'] = $instance = new \Requestum\ApiBundle\Action\ListAction('AppBundle\\Entity\\User');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.reset_password' shared service.
     *
     * @return \Requestum\ApiBundle\Action\UpdateAction
     */
    protected function getAction_User_ResetPasswordService()
    {
        $this->services['action.user.reset_password'] = $instance = new \Requestum\ApiBundle\Action\UpdateAction('AppBundle\\Entity\\User', 'AppBundle\\Form\\User\\UserType', 'AppBundle\\Entity\\User', 'AppBundle\\Form\\User\\PasswordType');

        $instance->setContainer($this);
        $instance->setOptions(array('fetch_field' => 'confirmationToken', 'access_attribute' => NULL));

        return $instance;
    }

    /**
     * Gets the public 'action.user.social_login' shared service.
     *
     * @return \AppBundle\Action\User\SocialLoginAction
     */
    protected function getAction_User_SocialLoginService()
    {
        $this->services['action.user.social_login'] = $instance = new \AppBundle\Action\User\SocialLoginAction('AppBundle\\Entity\\User');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'action.user.update' shared service.
     *
     * @return \Requestum\ApiBundle\Action\UpdateAction
     */
    protected function getAction_User_UpdateService()
    {
        $this->services['action.user.update'] = $instance = new \Requestum\ApiBundle\Action\UpdateAction('AppBundle\\Entity\\User', 'AppBundle\\Form\\User\\UserType');

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the public 'app.aws.uploader.storage' shared service.
     *
     * @return \AppBundle\Uploader\Storage\AwsStorage
     */
    protected function getApp_Aws_Uploader_StorageService()
    {
        return $this->services['app.aws.uploader.storage'] = new \AppBundle\Uploader\Storage\AwsStorage(${($_ = isset($this->services['aws.s3']) ? $this->services['aws.s3'] : $this->get('aws.s3')) && false ?: '_'}, 'evo');
    }

    /**
     * Gets the public 'app.aws.uploader.storage_base_64' shared service.
     *
     * @return \AppBundle\Uploader\Storage\AwsStorageBase64
     */
    protected function getApp_Aws_Uploader_StorageBase64Service()
    {
        return $this->services['app.aws.uploader.storage_base_64'] = new \AppBundle\Uploader\Storage\AwsStorageBase64(${($_ = isset($this->services['aws.s3']) ? $this->services['aws.s3'] : $this->get('aws.s3')) && false ?: '_'}, 'evo');
    }

    /**
     * Gets the public 'app.service.reset_password' shared service.
     *
     * @return \AppBundle\Service\ResetPassword\ResetPassword
     */
    protected function getApp_Service_ResetPasswordService()
    {
        return $this->services['app.service.reset_password'] = new \AppBundle\Service\ResetPassword\ResetPassword(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}, ${($_ = isset($this->services['requestum_email_sender']) ? $this->services['requestum_email_sender'] : $this->get('requestum_email_sender')) && false ?: '_'}, 'support@witley.com', 'replace this text with your reset link for this {token} token');
    }

    /**
     * Gets the public 'app.upload_listener' shared service.
     *
     * @return \AppBundle\EventListener\UploadListener
     */
    protected function getApp_UploadListenerService()
    {
        return $this->services['app.upload_listener'] = new \AppBundle\EventListener\UploadListener(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->get('assets.context')) && false ?: '_'}), array());
    }

    /**
     * Gets the public 'auth.security.user_provider' shared service.
     *
     * @return \AuthBundle\Security\UserProvider
     */
    protected function getAuth_Security_UserProviderService()
    {
        return $this->services['auth.security.user_provider'] = new \AuthBundle\Security\UserProvider(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'});
    }

    /**
     * Gets the public 'aws.acm' shared service.
     *
     * @return \Aws\Acm\AcmClient
     */
    protected function getAws_AcmService()
    {
        return $this->services['aws.acm'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createAcm();
    }

    /**
     * Gets the public 'aws.apigateway' shared service.
     *
     * @return \Aws\ApiGateway\ApiGatewayClient
     */
    protected function getAws_ApigatewayService()
    {
        return $this->services['aws.apigateway'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createApiGateway();
    }

    /**
     * Gets the public 'aws.applicationautoscaling' shared service.
     *
     * @return \Aws\ApplicationAutoScaling\ApplicationAutoScalingClient
     */
    protected function getAws_ApplicationautoscalingService()
    {
        return $this->services['aws.applicationautoscaling'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createApplicationAutoScaling();
    }

    /**
     * Gets the public 'aws.applicationdiscoveryservice' shared service.
     *
     * @return \Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient
     */
    protected function getAws_ApplicationdiscoveryserviceService()
    {
        return $this->services['aws.applicationdiscoveryservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createApplicationDiscoveryService();
    }

    /**
     * Gets the public 'aws.appstream' shared service.
     *
     * @return \Aws\Appstream\AppstreamClient
     */
    protected function getAws_AppstreamService()
    {
        return $this->services['aws.appstream'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createAppstream();
    }

    /**
     * Gets the public 'aws.athena' shared service.
     *
     * @return \Aws\Athena\AthenaClient
     */
    protected function getAws_AthenaService()
    {
        return $this->services['aws.athena'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createAthena();
    }

    /**
     * Gets the public 'aws.autoscaling' shared service.
     *
     * @return \Aws\AutoScaling\AutoScalingClient
     */
    protected function getAws_AutoscalingService()
    {
        return $this->services['aws.autoscaling'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createAutoScaling();
    }

    /**
     * Gets the public 'aws.batch' shared service.
     *
     * @return \Aws\Batch\BatchClient
     */
    protected function getAws_BatchService()
    {
        return $this->services['aws.batch'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createBatch();
    }

    /**
     * Gets the public 'aws.budgets' shared service.
     *
     * @return \Aws\Budgets\BudgetsClient
     */
    protected function getAws_BudgetsService()
    {
        return $this->services['aws.budgets'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createBudgets();
    }

    /**
     * Gets the public 'aws.clouddirectory' shared service.
     *
     * @return \Aws\CloudDirectory\CloudDirectoryClient
     */
    protected function getAws_ClouddirectoryService()
    {
        return $this->services['aws.clouddirectory'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudDirectory();
    }

    /**
     * Gets the public 'aws.cloudformation' shared service.
     *
     * @return \Aws\CloudFormation\CloudFormationClient
     */
    protected function getAws_CloudformationService()
    {
        return $this->services['aws.cloudformation'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudFormation();
    }

    /**
     * Gets the public 'aws.cloudfront' shared service.
     *
     * @return \Aws\CloudFront\CloudFrontClient
     */
    protected function getAws_CloudfrontService()
    {
        return $this->services['aws.cloudfront'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudFront();
    }

    /**
     * Gets the public 'aws.cloudhsm' shared service.
     *
     * @return \Aws\CloudHsm\CloudHsmClient
     */
    protected function getAws_CloudhsmService()
    {
        return $this->services['aws.cloudhsm'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudHsm();
    }

    /**
     * Gets the public 'aws.cloudhsmv2' shared service.
     *
     * @return \Aws\CloudHSMV2\CloudHSMV2Client
     */
    protected function getAws_Cloudhsmv2Service()
    {
        return $this->services['aws.cloudhsmv2'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudHSMV2();
    }

    /**
     * Gets the public 'aws.cloudsearch' shared service.
     *
     * @return \Aws\CloudSearch\CloudSearchClient
     */
    protected function getAws_CloudsearchService()
    {
        return $this->services['aws.cloudsearch'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudSearch();
    }

    /**
     * Gets the public 'aws.cloudsearchdomain' shared service.
     *
     * @return \Aws\CloudSearchDomain\CloudSearchDomainClient
     */
    protected function getAws_CloudsearchdomainService()
    {
        return $this->services['aws.cloudsearchdomain'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudSearchDomain();
    }

    /**
     * Gets the public 'aws.cloudtrail' shared service.
     *
     * @return \Aws\CloudTrail\CloudTrailClient
     */
    protected function getAws_CloudtrailService()
    {
        return $this->services['aws.cloudtrail'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudTrail();
    }

    /**
     * Gets the public 'aws.cloudwatch' shared service.
     *
     * @return \Aws\CloudWatch\CloudWatchClient
     */
    protected function getAws_CloudwatchService()
    {
        return $this->services['aws.cloudwatch'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudWatch();
    }

    /**
     * Gets the public 'aws.cloudwatchevents' shared service.
     *
     * @return \Aws\CloudWatchEvents\CloudWatchEventsClient
     */
    protected function getAws_CloudwatcheventsService()
    {
        return $this->services['aws.cloudwatchevents'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudWatchEvents();
    }

    /**
     * Gets the public 'aws.cloudwatchlogs' shared service.
     *
     * @return \Aws\CloudWatchLogs\CloudWatchLogsClient
     */
    protected function getAws_CloudwatchlogsService()
    {
        return $this->services['aws.cloudwatchlogs'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCloudWatchLogs();
    }

    /**
     * Gets the public 'aws.codebuild' shared service.
     *
     * @return \Aws\CodeBuild\CodeBuildClient
     */
    protected function getAws_CodebuildService()
    {
        return $this->services['aws.codebuild'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCodeBuild();
    }

    /**
     * Gets the public 'aws.codecommit' shared service.
     *
     * @return \Aws\CodeCommit\CodeCommitClient
     */
    protected function getAws_CodecommitService()
    {
        return $this->services['aws.codecommit'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCodeCommit();
    }

    /**
     * Gets the public 'aws.codedeploy' shared service.
     *
     * @return \Aws\CodeDeploy\CodeDeployClient
     */
    protected function getAws_CodedeployService()
    {
        return $this->services['aws.codedeploy'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCodeDeploy();
    }

    /**
     * Gets the public 'aws.codepipeline' shared service.
     *
     * @return \Aws\CodePipeline\CodePipelineClient
     */
    protected function getAws_CodepipelineService()
    {
        return $this->services['aws.codepipeline'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCodePipeline();
    }

    /**
     * Gets the public 'aws.codestar' shared service.
     *
     * @return \Aws\CodeStar\CodeStarClient
     */
    protected function getAws_CodestarService()
    {
        return $this->services['aws.codestar'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCodeStar();
    }

    /**
     * Gets the public 'aws.cognitoidentity' shared service.
     *
     * @return \Aws\CognitoIdentity\CognitoIdentityClient
     */
    protected function getAws_CognitoidentityService()
    {
        return $this->services['aws.cognitoidentity'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCognitoIdentity();
    }

    /**
     * Gets the public 'aws.cognitoidentityprovider' shared service.
     *
     * @return \Aws\CognitoIdentityProvider\CognitoIdentityProviderClient
     */
    protected function getAws_CognitoidentityproviderService()
    {
        return $this->services['aws.cognitoidentityprovider'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCognitoIdentityProvider();
    }

    /**
     * Gets the public 'aws.cognitosync' shared service.
     *
     * @return \Aws\CognitoSync\CognitoSyncClient
     */
    protected function getAws_CognitosyncService()
    {
        return $this->services['aws.cognitosync'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCognitoSync();
    }

    /**
     * Gets the public 'aws.configservice' shared service.
     *
     * @return \Aws\ConfigService\ConfigServiceClient
     */
    protected function getAws_ConfigserviceService()
    {
        return $this->services['aws.configservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createConfigService();
    }

    /**
     * Gets the public 'aws.costandusagereportservice' shared service.
     *
     * @return \Aws\CostandUsageReportService\CostandUsageReportServiceClient
     */
    protected function getAws_CostandusagereportserviceService()
    {
        return $this->services['aws.costandusagereportservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createCostandUsageReportService();
    }

    /**
     * Gets the public 'aws.databasemigrationservice' shared service.
     *
     * @return \Aws\DatabaseMigrationService\DatabaseMigrationServiceClient
     */
    protected function getAws_DatabasemigrationserviceService()
    {
        return $this->services['aws.databasemigrationservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDatabaseMigrationService();
    }

    /**
     * Gets the public 'aws.datapipeline' shared service.
     *
     * @return \Aws\DataPipeline\DataPipelineClient
     */
    protected function getAws_DatapipelineService()
    {
        return $this->services['aws.datapipeline'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDataPipeline();
    }

    /**
     * Gets the public 'aws.dax' shared service.
     *
     * @return \Aws\DAX\DAXClient
     */
    protected function getAws_DaxService()
    {
        return $this->services['aws.dax'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDAX();
    }

    /**
     * Gets the public 'aws.devicefarm' shared service.
     *
     * @return \Aws\DeviceFarm\DeviceFarmClient
     */
    protected function getAws_DevicefarmService()
    {
        return $this->services['aws.devicefarm'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDeviceFarm();
    }

    /**
     * Gets the public 'aws.directconnect' shared service.
     *
     * @return \Aws\DirectConnect\DirectConnectClient
     */
    protected function getAws_DirectconnectService()
    {
        return $this->services['aws.directconnect'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDirectConnect();
    }

    /**
     * Gets the public 'aws.directoryservice' shared service.
     *
     * @return \Aws\DirectoryService\DirectoryServiceClient
     */
    protected function getAws_DirectoryserviceService()
    {
        return $this->services['aws.directoryservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDirectoryService();
    }

    /**
     * Gets the public 'aws.dynamodb' shared service.
     *
     * @return \Aws\DynamoDb\DynamoDbClient
     */
    protected function getAws_DynamodbService()
    {
        return $this->services['aws.dynamodb'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDynamoDb();
    }

    /**
     * Gets the public 'aws.dynamodbstreams' shared service.
     *
     * @return \Aws\DynamoDbStreams\DynamoDbStreamsClient
     */
    protected function getAws_DynamodbstreamsService()
    {
        return $this->services['aws.dynamodbstreams'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createDynamoDbStreams();
    }

    /**
     * Gets the public 'aws.ec2' shared service.
     *
     * @return \Aws\Ec2\Ec2Client
     */
    protected function getAws_Ec2Service()
    {
        return $this->services['aws.ec2'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createEc2();
    }

    /**
     * Gets the public 'aws.ecr' shared service.
     *
     * @return \Aws\Ecr\EcrClient
     */
    protected function getAws_EcrService()
    {
        return $this->services['aws.ecr'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createEcr();
    }

    /**
     * Gets the public 'aws.ecs' shared service.
     *
     * @return \Aws\Ecs\EcsClient
     */
    protected function getAws_EcsService()
    {
        return $this->services['aws.ecs'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createEcs();
    }

    /**
     * Gets the public 'aws.efs' shared service.
     *
     * @return \Aws\Efs\EfsClient
     */
    protected function getAws_EfsService()
    {
        return $this->services['aws.efs'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createEfs();
    }

    /**
     * Gets the public 'aws.elasticache' shared service.
     *
     * @return \Aws\ElastiCache\ElastiCacheClient
     */
    protected function getAws_ElasticacheService()
    {
        return $this->services['aws.elasticache'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createElastiCache();
    }

    /**
     * Gets the public 'aws.elasticbeanstalk' shared service.
     *
     * @return \Aws\ElasticBeanstalk\ElasticBeanstalkClient
     */
    protected function getAws_ElasticbeanstalkService()
    {
        return $this->services['aws.elasticbeanstalk'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createElasticBeanstalk();
    }

    /**
     * Gets the public 'aws.elasticloadbalancing' shared service.
     *
     * @return \Aws\ElasticLoadBalancing\ElasticLoadBalancingClient
     */
    protected function getAws_ElasticloadbalancingService()
    {
        return $this->services['aws.elasticloadbalancing'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createElasticLoadBalancing();
    }

    /**
     * Gets the public 'aws.elasticloadbalancingv2' shared service.
     *
     * @return \Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client
     */
    protected function getAws_Elasticloadbalancingv2Service()
    {
        return $this->services['aws.elasticloadbalancingv2'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createElasticLoadBalancingV2();
    }

    /**
     * Gets the public 'aws.elasticsearchservice' shared service.
     *
     * @return \Aws\ElasticsearchService\ElasticsearchServiceClient
     */
    protected function getAws_ElasticsearchserviceService()
    {
        return $this->services['aws.elasticsearchservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createElasticsearchService();
    }

    /**
     * Gets the public 'aws.elastictranscoder' shared service.
     *
     * @return \Aws\ElasticTranscoder\ElasticTranscoderClient
     */
    protected function getAws_ElastictranscoderService()
    {
        return $this->services['aws.elastictranscoder'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createElasticTranscoder();
    }

    /**
     * Gets the public 'aws.emr' shared service.
     *
     * @return \Aws\Emr\EmrClient
     */
    protected function getAws_EmrService()
    {
        return $this->services['aws.emr'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createEmr();
    }

    /**
     * Gets the public 'aws.firehose' shared service.
     *
     * @return \Aws\Firehose\FirehoseClient
     */
    protected function getAws_FirehoseService()
    {
        return $this->services['aws.firehose'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createFirehose();
    }

    /**
     * Gets the public 'aws.gamelift' shared service.
     *
     * @return \Aws\GameLift\GameLiftClient
     */
    protected function getAws_GameliftService()
    {
        return $this->services['aws.gamelift'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createGameLift();
    }

    /**
     * Gets the public 'aws.glacier' shared service.
     *
     * @return \Aws\Glacier\GlacierClient
     */
    protected function getAws_GlacierService()
    {
        return $this->services['aws.glacier'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createGlacier();
    }

    /**
     * Gets the public 'aws.glue' shared service.
     *
     * @return \Aws\Glue\GlueClient
     */
    protected function getAws_GlueService()
    {
        return $this->services['aws.glue'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createGlue();
    }

    /**
     * Gets the public 'aws.greengrass' shared service.
     *
     * @return \Aws\Greengrass\GreengrassClient
     */
    protected function getAws_GreengrassService()
    {
        return $this->services['aws.greengrass'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createGreengrass();
    }

    /**
     * Gets the public 'aws.health' shared service.
     *
     * @return \Aws\Health\HealthClient
     */
    protected function getAws_HealthService()
    {
        return $this->services['aws.health'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createHealth();
    }

    /**
     * Gets the public 'aws.iam' shared service.
     *
     * @return \Aws\Iam\IamClient
     */
    protected function getAws_IamService()
    {
        return $this->services['aws.iam'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createIam();
    }

    /**
     * Gets the public 'aws.importexport' shared service.
     *
     * @return \Aws\ImportExport\ImportExportClient
     */
    protected function getAws_ImportexportService()
    {
        return $this->services['aws.importexport'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createImportExport();
    }

    /**
     * Gets the public 'aws.inspector' shared service.
     *
     * @return \Aws\Inspector\InspectorClient
     */
    protected function getAws_InspectorService()
    {
        return $this->services['aws.inspector'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createInspector();
    }

    /**
     * Gets the public 'aws.iot' shared service.
     *
     * @return \Aws\Iot\IotClient
     */
    protected function getAws_IotService()
    {
        return $this->services['aws.iot'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createIot();
    }

    /**
     * Gets the public 'aws.iotdataplane' shared service.
     *
     * @return \Aws\IotDataPlane\IotDataPlaneClient
     */
    protected function getAws_IotdataplaneService()
    {
        return $this->services['aws.iotdataplane'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createIotDataPlane();
    }

    /**
     * Gets the public 'aws.kinesis' shared service.
     *
     * @return \Aws\Kinesis\KinesisClient
     */
    protected function getAws_KinesisService()
    {
        return $this->services['aws.kinesis'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createKinesis();
    }

    /**
     * Gets the public 'aws.kinesisanalytics' shared service.
     *
     * @return \Aws\KinesisAnalytics\KinesisAnalyticsClient
     */
    protected function getAws_KinesisanalyticsService()
    {
        return $this->services['aws.kinesisanalytics'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createKinesisAnalytics();
    }

    /**
     * Gets the public 'aws.kms' shared service.
     *
     * @return \Aws\Kms\KmsClient
     */
    protected function getAws_KmsService()
    {
        return $this->services['aws.kms'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createKms();
    }

    /**
     * Gets the public 'aws.lambda' shared service.
     *
     * @return \Aws\Lambda\LambdaClient
     */
    protected function getAws_LambdaService()
    {
        return $this->services['aws.lambda'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createLambda();
    }

    /**
     * Gets the public 'aws.lexmodelbuildingservice' shared service.
     *
     * @return \Aws\LexModelBuildingService\LexModelBuildingServiceClient
     */
    protected function getAws_LexmodelbuildingserviceService()
    {
        return $this->services['aws.lexmodelbuildingservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createLexModelBuildingService();
    }

    /**
     * Gets the public 'aws.lexruntimeservice' shared service.
     *
     * @return \Aws\LexRuntimeService\LexRuntimeServiceClient
     */
    protected function getAws_LexruntimeserviceService()
    {
        return $this->services['aws.lexruntimeservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createLexRuntimeService();
    }

    /**
     * Gets the public 'aws.lightsail' shared service.
     *
     * @return \Aws\Lightsail\LightsailClient
     */
    protected function getAws_LightsailService()
    {
        return $this->services['aws.lightsail'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createLightsail();
    }

    /**
     * Gets the public 'aws.machinelearning' shared service.
     *
     * @return \Aws\MachineLearning\MachineLearningClient
     */
    protected function getAws_MachinelearningService()
    {
        return $this->services['aws.machinelearning'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createMachineLearning();
    }

    /**
     * Gets the public 'aws.marketplacecommerceanalytics' shared service.
     *
     * @return \Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient
     */
    protected function getAws_MarketplacecommerceanalyticsService()
    {
        return $this->services['aws.marketplacecommerceanalytics'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createMarketplaceCommerceAnalytics();
    }

    /**
     * Gets the public 'aws.marketplaceentitlementservice' shared service.
     *
     * @return \Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient
     */
    protected function getAws_MarketplaceentitlementserviceService()
    {
        return $this->services['aws.marketplaceentitlementservice'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createMarketplaceEntitlementService();
    }

    /**
     * Gets the public 'aws.marketplacemetering' shared service.
     *
     * @return \Aws\MarketplaceMetering\MarketplaceMeteringClient
     */
    protected function getAws_MarketplacemeteringService()
    {
        return $this->services['aws.marketplacemetering'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createMarketplaceMetering();
    }

    /**
     * Gets the public 'aws.migrationhub' shared service.
     *
     * @return \Aws\MigrationHub\MigrationHubClient
     */
    protected function getAws_MigrationhubService()
    {
        return $this->services['aws.migrationhub'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createMigrationHub();
    }

    /**
     * Gets the public 'aws.mobile' shared service.
     *
     * @return \Aws\Mobile\MobileClient
     */
    protected function getAws_MobileService()
    {
        return $this->services['aws.mobile'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createMobile();
    }

    /**
     * Gets the public 'aws.mturk' shared service.
     *
     * @return \Aws\MTurk\MTurkClient
     */
    protected function getAws_MturkService()
    {
        return $this->services['aws.mturk'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createMTurk();
    }

    /**
     * Gets the public 'aws.opsworks' shared service.
     *
     * @return \Aws\OpsWorks\OpsWorksClient
     */
    protected function getAws_OpsworksService()
    {
        return $this->services['aws.opsworks'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createOpsWorks();
    }

    /**
     * Gets the public 'aws.opsworkscm' shared service.
     *
     * @return \Aws\OpsWorksCM\OpsWorksCMClient
     */
    protected function getAws_OpsworkscmService()
    {
        return $this->services['aws.opsworkscm'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createOpsWorksCM();
    }

    /**
     * Gets the public 'aws.organizations' shared service.
     *
     * @return \Aws\Organizations\OrganizationsClient
     */
    protected function getAws_OrganizationsService()
    {
        return $this->services['aws.organizations'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createOrganizations();
    }

    /**
     * Gets the public 'aws.pinpoint' shared service.
     *
     * @return \Aws\Pinpoint\PinpointClient
     */
    protected function getAws_PinpointService()
    {
        return $this->services['aws.pinpoint'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createPinpoint();
    }

    /**
     * Gets the public 'aws.polly' shared service.
     *
     * @return \Aws\Polly\PollyClient
     */
    protected function getAws_PollyService()
    {
        return $this->services['aws.polly'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createPolly();
    }

    /**
     * Gets the public 'aws.rds' shared service.
     *
     * @return \Aws\Rds\RdsClient
     */
    protected function getAws_RdsService()
    {
        return $this->services['aws.rds'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createRds();
    }

    /**
     * Gets the public 'aws.redshift' shared service.
     *
     * @return \Aws\Redshift\RedshiftClient
     */
    protected function getAws_RedshiftService()
    {
        return $this->services['aws.redshift'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createRedshift();
    }

    /**
     * Gets the public 'aws.rekognition' shared service.
     *
     * @return \Aws\Rekognition\RekognitionClient
     */
    protected function getAws_RekognitionService()
    {
        return $this->services['aws.rekognition'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createRekognition();
    }

    /**
     * Gets the public 'aws.resourcegroupstaggingapi' shared service.
     *
     * @return \Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient
     */
    protected function getAws_ResourcegroupstaggingapiService()
    {
        return $this->services['aws.resourcegroupstaggingapi'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createResourceGroupsTaggingAPI();
    }

    /**
     * Gets the public 'aws.route53' shared service.
     *
     * @return \Aws\Route53\Route53Client
     */
    protected function getAws_Route53Service()
    {
        return $this->services['aws.route53'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createRoute53();
    }

    /**
     * Gets the public 'aws.route53domains' shared service.
     *
     * @return \Aws\Route53Domains\Route53DomainsClient
     */
    protected function getAws_Route53domainsService()
    {
        return $this->services['aws.route53domains'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createRoute53Domains();
    }

    /**
     * Gets the public 'aws.s3' shared service.
     *
     * @return \Aws\S3\S3Client
     */
    protected function getAws_S3Service()
    {
        return $this->services['aws.s3'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createS3();
    }

    /**
     * Gets the public 'aws.servicecatalog' shared service.
     *
     * @return \Aws\ServiceCatalog\ServiceCatalogClient
     */
    protected function getAws_ServicecatalogService()
    {
        return $this->services['aws.servicecatalog'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createServiceCatalog();
    }

    /**
     * Gets the public 'aws.ses' shared service.
     *
     * @return \Aws\Ses\SesClient
     */
    protected function getAws_SesService()
    {
        return $this->services['aws.ses'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSes();
    }

    /**
     * Gets the public 'aws.sfn' shared service.
     *
     * @return \Aws\Sfn\SfnClient
     */
    protected function getAws_SfnService()
    {
        return $this->services['aws.sfn'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSfn();
    }

    /**
     * Gets the public 'aws.shield' shared service.
     *
     * @return \Aws\Shield\ShieldClient
     */
    protected function getAws_ShieldService()
    {
        return $this->services['aws.shield'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createShield();
    }

    /**
     * Gets the public 'aws.sms' shared service.
     *
     * @return \Aws\Sms\SmsClient
     */
    protected function getAws_SmsService()
    {
        return $this->services['aws.sms'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSms();
    }

    /**
     * Gets the public 'aws.snowball' shared service.
     *
     * @return \Aws\SnowBall\SnowBallClient
     */
    protected function getAws_SnowballService()
    {
        return $this->services['aws.snowball'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSnowBall();
    }

    /**
     * Gets the public 'aws.sns' shared service.
     *
     * @return \Aws\Sns\SnsClient
     */
    protected function getAws_SnsService()
    {
        return $this->services['aws.sns'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSns();
    }

    /**
     * Gets the public 'aws.sqs' shared service.
     *
     * @return \Aws\Sqs\SqsClient
     */
    protected function getAws_SqsService()
    {
        return $this->services['aws.sqs'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSqs();
    }

    /**
     * Gets the public 'aws.ssm' shared service.
     *
     * @return \Aws\Ssm\SsmClient
     */
    protected function getAws_SsmService()
    {
        return $this->services['aws.ssm'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSsm();
    }

    /**
     * Gets the public 'aws.storagegateway' shared service.
     *
     * @return \Aws\StorageGateway\StorageGatewayClient
     */
    protected function getAws_StoragegatewayService()
    {
        return $this->services['aws.storagegateway'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createStorageGateway();
    }

    /**
     * Gets the public 'aws.sts' shared service.
     *
     * @return \Aws\Sts\StsClient
     */
    protected function getAws_StsService()
    {
        return $this->services['aws.sts'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSts();
    }

    /**
     * Gets the public 'aws.support' shared service.
     *
     * @return \Aws\Support\SupportClient
     */
    protected function getAws_SupportService()
    {
        return $this->services['aws.support'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSupport();
    }

    /**
     * Gets the public 'aws.swf' shared service.
     *
     * @return \Aws\Swf\SwfClient
     */
    protected function getAws_SwfService()
    {
        return $this->services['aws.swf'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createSwf();
    }

    /**
     * Gets the public 'aws.waf' shared service.
     *
     * @return \Aws\Waf\WafClient
     */
    protected function getAws_WafService()
    {
        return $this->services['aws.waf'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createWaf();
    }

    /**
     * Gets the public 'aws.wafregional' shared service.
     *
     * @return \Aws\WafRegional\WafRegionalClient
     */
    protected function getAws_WafregionalService()
    {
        return $this->services['aws.wafregional'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createWafRegional();
    }

    /**
     * Gets the public 'aws.workdocs' shared service.
     *
     * @return \Aws\WorkDocs\WorkDocsClient
     */
    protected function getAws_WorkdocsService()
    {
        return $this->services['aws.workdocs'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createWorkDocs();
    }

    /**
     * Gets the public 'aws.workspaces' shared service.
     *
     * @return \Aws\WorkSpaces\WorkSpacesClient
     */
    protected function getAws_WorkspacesService()
    {
        return $this->services['aws.workspaces'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createWorkSpaces();
    }

    /**
     * Gets the public 'aws.xray' shared service.
     *
     * @return \Aws\XRay\XRayClient
     */
    protected function getAws_XrayService()
    {
        return $this->services['aws.xray'] = ${($_ = isset($this->services['aws_sdk']) ? $this->services['aws_sdk'] : $this->get('aws_sdk')) && false ?: '_'}->createXRay();
    }

    /**
     * Gets the public 'aws_sdk' shared service.
     *
     * @return \Aws\Sdk
     */
    protected function getAwsSdkService()
    {
        return $this->services['aws_sdk'] = new \Aws\Sdk(array('version' => 'latest', 'region' => NULL, 'credentials' => array('key' => 'AKIAJJPAH2PM2XBENSYQ', 'secret' => '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'), 'S3' => array('version' => 'latest'), 'ua_append' => array(0 => 'Symfony/3.3.10', 1 => 'SYMOD/1.3.0')));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.app.recorder_inner']) ? $this->services['cache.app.recorder_inner'] : $this->getCache_App_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache.default_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_DefaultClearerService()
    {
        return $this->services['cache.default_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    protected function getCache_GlobalClearerService()
    {
        return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}, 'cache.serializer' => ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.system.recorder_inner']) ? $this->services['cache.system.recorder_inner'] : $this->getCache_System_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => ${($_ = isset($this->services['cache.default_clearer']) ? $this->services['cache.default_clearer'] : $this->get('cache.default_clearer')) && false ?: '_'}));
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $b = ${($_ = isset($this->services['templating.filename_parser']) ? $this->services['templating.filename_parser'] : $this->get('templating.filename_parser')) && false ?: '_'};

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}, (__DIR__.'/validation.php'), ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'}), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 4 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\SerializerCacheWarmer(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'})), (__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'}), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(new \Symfony\Component\DependencyInjection\ServiceLocator(array('twig' => function () {
            $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
        })), $c, array()), 6 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 7 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'})));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['1_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f']) ? $this->services['1_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f'] : $this->get1176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12fService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['2_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f']) ? $this->services['2_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f'] : $this->get2176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12fService()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the public 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand
     */
    protected function getConsole_Command_SymfonyBundleSecuritybundleCommandUserpasswordencodercommandService()
    {
        return $this->services['console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand'] = new \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, array(0 => 'AppBundle\\Entity\\User'));
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverruncommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerruncommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverruncommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand(($this->targetDirs[3].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstartcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstartcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand(($this->targetDirs[3].'/public'), 'dev');
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstatuscommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstatuscommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand();
    }

    /**
     * Gets the public 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' shared service.
     *
     * @return \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand
     */
    protected function getConsole_Command_SymfonyBundleWebserverbundleCommandServerstopcommandService()
    {
        return $this->services['console.command.symfony_bundle_webserverbundle_command_serverstopcommand'] = new \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand();
    }

    /**
     * Gets the public 'core.json_decode_listener' shared service.
     *
     * @return \Requestum\ApiBundle\EventListener\JsonDecoderListener
     */
    protected function getCore_JsonDecodeListenerService()
    {
        return $this->services['core.json_decode_listener'] = new \Requestum\ApiBundle\EventListener\JsonDecoderListener();
    }

    /**
     * Gets the public 'core.listener.exception' shared service.
     *
     * @return \Requestum\ApiBundle\EventListener\Exception\ExceptionListener
     */
    protected function getCore_Listener_ExceptionService()
    {
        $this->services['core.listener.exception'] = $instance = new \Requestum\ApiBundle\EventListener\Exception\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setEnvironment('dev');

        return $instance;
    }

    /**
     * Gets the public 'core.normalizer.form_error' shared service.
     *
     * @return \Requestum\ApiBundle\Serializer\Normalizer\SymfonyFormErrorNormalizer
     */
    protected function getCore_Normalizer_FormErrorService()
    {
        return $this->services['core.normalizer.form_error'] = new \Requestum\ApiBundle\Serializer\Normalizer\SymfonyFormErrorNormalizer(${($_ = isset($this->services['core.util.error_factory']) ? $this->services['core.util.error_factory'] : $this->get('core.util.error_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'core.normalizer.pagerfanta' shared service.
     *
     * @return \Requestum\ApiBundle\Serializer\Normalizer\PagerfantaNormalizer
     */
    protected function getCore_Normalizer_PagerfantaService()
    {
        return $this->services['core.normalizer.pagerfanta'] = new \Requestum\ApiBundle\Serializer\Normalizer\PagerfantaNormalizer();
    }

    /**
     * Gets the public 'core.resourse.attribute_extraction_strategy' shared service.
     *
     * @return \Requestum\ApiBundle\Serializer\Normalizer\AttributeExtractionStrategy
     */
    protected function getCore_Resourse_AttributeExtractionStrategyService()
    {
        return $this->services['core.resourse.attribute_extraction_strategy'] = new \Requestum\ApiBundle\Serializer\Normalizer\AttributeExtractionStrategy(${($_ = isset($this->services['core.resourse.metadata_factory']) ? $this->services['core.resourse.metadata_factory'] : $this->get('core.resourse.metadata_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'core.resourse.metadata_factory' shared service.
     *
     * @return \Requestum\ApiBundle\Rest\ResourceMetadataFactory
     */
    protected function getCore_Resourse_MetadataFactoryService()
    {
        return $this->services['core.resourse.metadata_factory'] = new \Requestum\ApiBundle\Rest\ResourceMetadataFactory(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'core.util.error_factory' shared service.
     *
     * @return \Requestum\ApiBundle\Util\ErrorFactory
     */
    protected function getCore_Util_ErrorFactoryService()
    {
        return $this->services['core.util.error_factory'] = new \Requestum\ApiBundle\Util\ErrorFactory();
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->get('data_collector.form.extractor')) && false ?: '_'});
    }

    /**
     * Gets the public 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the public 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the public 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the public 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->getArgumentResolver_RequestAttributeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->getArgumentResolver_RequestService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->getArgumentResolver_SessionService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->getSecurity_UserValueResolverService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->getArgumentResolver_ServiceService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->getArgumentResolver_DefaultService()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->getArgumentResolver_VariadicService()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, ${($_ = isset($this->services['var_dumper.cli_dumper']) ? $this->services['var_dumper.cli_dumper'] : $this->get('var_dumper.cli_dumper')) && false ?: '_'});
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['nelmio_cors.cors_listener']) ? $this->services['nelmio_cors.cors_listener'] : $this->get('nelmio_cors.cors_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 250);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['nelmio_api_doc.event_listener.request']) ? $this->services['nelmio_api_doc.event_listener.request'] : $this->get('nelmio_api_doc.event_listener.request')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.max_size']) ? $this->services['oneup_uploader.validation_listener.max_size'] : $this->get('oneup_uploader.validation_listener.max_size')) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.allowed_mimetype']) ? $this->services['oneup_uploader.validation_listener.allowed_mimetype'] : $this->get('oneup_uploader.validation_listener.allowed_mimetype')) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('oneup_uploader.validation', array(0 => function () {
            return ${($_ = isset($this->services['oneup_uploader.validation_listener.disallowed_mimetype']) ? $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] : $this->get('oneup_uploader.validation_listener.disallowed_mimetype')) && false ?: '_'};
        }, 1 => 'onValidate'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['core.json_decode_listener']) ? $this->services['core.json_decode_listener'] : $this->get('core.json_decode_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['core.listener.exception']) ? $this->services['core.listener.exception'] : $this->get('core.listener.exception')) && false ?: '_'};
        }, 1 => 'onKernelException'), -10);
        $instance->addListener('oneup_uploader.post_persist', array(0 => function () {
            return ${($_ = isset($this->services['app.upload_listener']) ? $this->services['app.upload_listener'] : $this->get('app.upload_listener')) && false ?: '_'};
        }, 1 => 'onUpload'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->get('response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->get('streamed_response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->get('locale_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->get('validate_request_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->getConsole_ErrorListenerService()) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->get('session_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->get('session.save_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->get('profiler_listener')) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->get('debug.debug_handlers_listener')) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->get('router_listener')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->get('security.firewall')) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->get('security.rememberme.response_listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->get('twig.exception_listener')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->get('swiftmailer.email_sender.listener')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->get('sensio_framework_extra.controller.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->get('sensio_framework_extra.converter.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->get('sensio_framework_extra.view.listener')) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->get('sensio_framework_extra.cache.listener')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->get('sensio_framework_extra.security.listener')) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->get('debug.dump_listener')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->get('web_profiler.debug_toolbar')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'deprecated.form.registry' shared service.
     *
     * @return \stdClass
     *
     * @deprecated The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0
     */
    protected function getDeprecated_Form_RegistryService()
    {
        @trigger_error('The service "deprecated.form.registry" is internal and deprecated since Symfony 3.3 and will be removed in Symfony 4.0', E_USER_DEPRECATED);

        $this->services['deprecated.form.registry'] = $instance = new \stdClass();

        $instance->registry = array(0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'}, 6 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'}, 7 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(${($_ = isset($this->services['monolog.logger.doctrine']) ? $this->services['monolog.logger.doctrine'] : $this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Gedmo\Timestampable\TimestampableListener();
        $c->setAnnotationReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});

        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber($c);
        $d->addEventListener(array(0 => 'loadClassMetadata'), ${($_ = isset($this->services['doctrine.orm.default_listeners.attach_entity_listeners']) ? $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] : $this->get('doctrine.orm.default_listeners.attach_entity_listeners')) && false ?: '_'});

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : $this->get('doctrine.dbal.connection_factory')) && false ?: '_'}->createConnection(array('driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => 3306, 'dbname' => 'api_edition', 'user' => 'root', 'password' => 'root', 'charset' => 'UTF8', 'driverOptions' => array(), 'serverVersion' => '5.7', 'defaultTableOptions' => array()), $b, $d, array());
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        $this->services['doctrine.orm.default_entity_listener_resolver'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);

        $instance->register(${($_ = isset($this->services['user_listener']) ? $this->services['user_listener'] : $this->get('user_listener')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $b = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/doctrine') => 'FOS\\OAuthServerBundle\\Entity'));
        $b->setGlobalBasename('mapping');

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/src/AuthBundle/Entity'), 1 => ($this->targetDirs[3].'/src/AppBundle/Entity')));

        $d = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $d->addDriver($b, 'FOS\\OAuthServerBundle\\Entity');
        $d->addDriver($c, 'AuthBundle\\Entity');
        $d->addDriver($c, 'AppBundle\\Entity');

        $e = new \Doctrine\ORM\Configuration();
        $e->setEntityNamespaces(array('FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\Entity', 'AuthBundle' => 'AuthBundle\\Entity', 'AppBundle' => 'AppBundle\\Entity'));
        $e->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache')) && false ?: '_'});
        $e->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_query_cache')) && false ?: '_'});
        $e->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->get('doctrine_cache.providers.doctrine.orm.default_result_cache')) && false ?: '_'});
        $e->setMetadataDriverImpl($d);
        $e->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $e->setProxyNamespace('Proxies');
        $e->setAutoGenerateProxyClasses(true);
        $e->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $e->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $e->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $e->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $e->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : $this->get('doctrine.orm.default_entity_listener_resolver')) && false ?: '_'});

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->get('doctrine.dbal.default_connection')) && false ?: '_'}, $e);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : $this->get('doctrine.orm.default_manager_configurator')) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->get('doctrine.orm.default_entity_manager')) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_cd299288a1e3d58c9c389d192a58419f1b99d2a161f5d2de25434d846184b489');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_cd299288a1e3d58c9c389d192a58419f1b99d2a161f5d2de25434d846184b489');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_cd299288a1e3d58c9c389d192a58419f1b99d2a161f5d2de25434d846184b489');

        return $instance;
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}, ($this->targetDirs[3].'/app/Resources'), array(0 => ($this->targetDirs[3].'/app')));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'filter.filter_expander' shared service.
     *
     * @return \Requestum\ApiBundle\Filter\FilterExpander
     */
    protected function getFilter_FilterExpanderService()
    {
        return $this->services['filter.filter_expander'] = new \Requestum\ApiBundle\Filter\FilterExpander();
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->get('form.registry')) && false ?: '_'}, ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(array('FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType' => function () {
            return ${($_ = isset($this->services['fos_oauth_server.authorize.form.type']) ? $this->services['fos_oauth_server.authorize.form.type'] : $this->get('fos_oauth_server.authorize.form.type')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
            return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->get('form.type.entity')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
            return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->getForm_Type_ChoiceService()) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
            return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->getForm_Type_FormService()) && false ?: '_'};
        })), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->getForm_TypeExtension_Form_HttpFoundationService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->getForm_TypeExtension_Form_ValidatorService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->getForm_TypeExtension_Upload_ValidatorService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->getForm_TypeExtension_Form_DataCollectorService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['nelmio_api_doc.form.extension.description_form_type_extension']) ? $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] : $this->get('nelmio_api_doc.form.extension.description_form_type_extension')) && false ?: '_'};
        }, 5), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : $this->getForm_TypeExtension_Repeated_ValidatorService()) && false ?: '_'};
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : $this->getForm_TypeExtension_Submit_ValidatorService()) && false ?: '_'};
        }, 1)), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->getForm_TypeGuesser_ValidatorService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->get('form.type_guesser.doctrine')) && false ?: '_'};
        }, 2), NULL)), ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->get('form.resolved_type_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_oauth_server.access_token_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\AccessTokenManager
     */
    protected function getFosOauthServer_AccessTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.access_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\AccessTokenManager(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->getFosOauthServer_EntityManagerService()) && false ?: '_'}, 'AuthBundle\\Entity\\AccessToken');
    }

    /**
     * Gets the public 'fos_oauth_server.auth_code_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\AuthCodeManager
     */
    protected function getFosOauthServer_AuthCodeManager_DefaultService()
    {
        return $this->services['fos_oauth_server.auth_code_manager.default'] = new \FOS\OAuthServerBundle\Entity\AuthCodeManager(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->getFosOauthServer_EntityManagerService()) && false ?: '_'}, 'AuthBundle\\Entity\\AuthCode');
    }

    /**
     * Gets the public 'fos_oauth_server.authorize.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    protected function getFosOauthServer_Authorize_FormService()
    {
        return $this->services['fos_oauth_server.authorize.form'] = ${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}->createNamed('fos_oauth_server_authorize_form', 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', NULL, array('validation_groups' => array(0 => 'Authorize', 1 => 'Default')));
    }

    /**
     * Gets the public 'fos_oauth_server.authorize.form.handler.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler
     */
    protected function getFosOauthServer_Authorize_Form_Handler_DefaultService()
    {
        return $this->services['fos_oauth_server.authorize.form.handler.default'] = new \FOS\OAuthServerBundle\Form\Handler\AuthorizeFormHandler(${($_ = isset($this->services['fos_oauth_server.authorize.form']) ? $this->services['fos_oauth_server.authorize.form'] : $this->get('fos_oauth_server.authorize.form')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_oauth_server.authorize.form.type' shared service.
     *
     * @return \FOS\OAuthServerBundle\Form\Type\AuthorizeFormType
     */
    protected function getFosOauthServer_Authorize_Form_TypeService()
    {
        return $this->services['fos_oauth_server.authorize.form.type'] = new \FOS\OAuthServerBundle\Form\Type\AuthorizeFormType();
    }

    /**
     * Gets the public 'fos_oauth_server.client_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\ClientManager
     */
    protected function getFosOauthServer_ClientManager_DefaultService()
    {
        return $this->services['fos_oauth_server.client_manager.default'] = new \FOS\OAuthServerBundle\Entity\ClientManager(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->getFosOauthServer_EntityManagerService()) && false ?: '_'}, 'AuthBundle\\Entity\\Client');
    }

    /**
     * Gets the public 'fos_oauth_server.controller.token' shared service.
     *
     * @return \FOS\OAuthServerBundle\Controller\TokenController
     */
    protected function getFosOauthServer_Controller_TokenService()
    {
        return $this->services['fos_oauth_server.controller.token'] = new \FOS\OAuthServerBundle\Controller\TokenController(${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->get('fos_oauth_server.server')) && false ?: '_'});
    }

    /**
     * Gets the public 'fos_oauth_server.refresh_token_manager.default' shared service.
     *
     * @return \FOS\OAuthServerBundle\Entity\RefreshTokenManager
     */
    protected function getFosOauthServer_RefreshTokenManager_DefaultService()
    {
        return $this->services['fos_oauth_server.refresh_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\RefreshTokenManager(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->getFosOauthServer_EntityManagerService()) && false ?: '_'}, 'AuthBundle\\Entity\\RefreshToken');
    }

    /**
     * Gets the public 'fos_oauth_server.server' shared service.
     *
     * @return \OAuth2\OAuth2
     */
    protected function getFosOauthServer_ServerService()
    {
        return $this->services['fos_oauth_server.server'] = new \OAuth2\OAuth2(${($_ = isset($this->services['fos_oauth_server.storage']) ? $this->services['fos_oauth_server.storage'] : $this->get('fos_oauth_server.storage')) && false ?: '_'}, array('access_token_lifetime' => 1209600, 'refresh_token_lifetime' => 1209600));
    }

    /**
     * Gets the public 'fos_oauth_server.storage' shared service.
     *
     * @return \FOS\OAuthServerBundle\Storage\OAuthStorage
     */
    protected function getFosOauthServer_StorageService()
    {
        return $this->services['fos_oauth_server.storage'] = new \FOS\OAuthServerBundle\Storage\OAuthStorage(${($_ = isset($this->services['fos_oauth_server.client_manager.default']) ? $this->services['fos_oauth_server.client_manager.default'] : $this->get('fos_oauth_server.client_manager.default')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.access_token_manager.default']) ? $this->services['fos_oauth_server.access_token_manager.default'] : $this->get('fos_oauth_server.access_token_manager.default')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.refresh_token_manager.default']) ? $this->services['fos_oauth_server.refresh_token_manager.default'] : $this->get('fos_oauth_server.refresh_token_manager.default')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.auth_code_manager.default']) ? $this->services['fos_oauth_server.auth_code_manager.default'] : $this->get('fos_oauth_server.auth_code_manager.default')) && false ?: '_'}, ${($_ = isset($this->services['auth.security.user_provider']) ? $this->services['auth.security.user_provider'] : $this->get('auth.security.user_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        return $this->services['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(${($_ = isset($this->services['service_locator.e64d23c3bf770e2cf44b71643280668d']) ? $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] : $this->getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'fragment.renderer.esi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'}, NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.ssi' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->get('uri_signer')) && false ?: '_'});

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->get('debug.controller_resolver')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->get('debug.argument_resolver')) && false ?: '_'});
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     *
     * @deprecated The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        @trigger_error('The "kernel.class_cache.cache_warmer" option is deprecated since version 3.3, to be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel'));
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.activation_strategy.not_found' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the public 'monolog.handler.fingers_crossed.error_level_activation_strategy' shared service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.handler.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ServerLogHandler
     */
    protected function getMonolog_Handler_ServerLogService()
    {
        return $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true);
    }

    /**
     * Gets the public 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ConsoleService()
    {
        $this->services['monolog.logger.console'] = $instance = new \Symfony\Bridge\Monolog\Logger('console');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.router' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->get('monolog.handler.server_log')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->get('monolog.handler.console')) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->get('monolog.handler.main')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'nelmio_api_doc.doc_comment_extractor' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Util\DocCommentExtractor
     */
    protected function getNelmioApiDoc_DocCommentExtractorService()
    {
        return $this->services['nelmio_api_doc.doc_comment_extractor'] = new \Nelmio\ApiDocBundle\Util\DocCommentExtractor();
    }

    /**
     * Gets the public 'nelmio_api_doc.event_listener.request' shared service.
     *
     * @return \Nelmio\ApiDocBundle\EventListener\RequestListener
     */
    protected function getNelmioApiDoc_EventListener_RequestService()
    {
        return $this->services['nelmio_api_doc.event_listener.request'] = new \Nelmio\ApiDocBundle\EventListener\RequestListener(${($_ = isset($this->services['nelmio_api_doc.extractor.api_doc_extractor']) ? $this->services['nelmio_api_doc.extractor.api_doc_extractor'] : $this->get('nelmio_api_doc.extractor.api_doc_extractor')) && false ?: '_'}, ${($_ = isset($this->services['nelmio_api_doc.formatter.html_formatter']) ? $this->services['nelmio_api_doc.formatter.html_formatter'] : $this->get('nelmio_api_doc.formatter.html_formatter')) && false ?: '_'}, '_doc');
    }

    /**
     * Gets the public 'nelmio_api_doc.extractor.api_doc_extractor' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Extractor\CachingApiDocExtractor
     */
    protected function getNelmioApiDoc_Extractor_ApiDocExtractorService()
    {
        $a = ${($_ = isset($this->services['nelmio_api_doc.doc_comment_extractor']) ? $this->services['nelmio_api_doc.doc_comment_extractor'] : $this->get('nelmio_api_doc.doc_comment_extractor')) && false ?: '_'};

        $this->services['nelmio_api_doc.extractor.api_doc_extractor'] = $instance = new \Nelmio\ApiDocBundle\Extractor\CachingApiDocExtractor($this, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}, $a, new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}), array(0 => new \Nelmio\ApiDocBundle\Extractor\Handler\FosRestHandler(), 1 => new \Nelmio\ApiDocBundle\Extractor\Handler\JmsSecurityExtraHandler(), 2 => new \Nelmio\ApiDocBundle\Extractor\Handler\SensioFrameworkExtraHandler(), 3 => new \Nelmio\ApiDocBundle\Extractor\Handler\PhpDocHandler($a)), array(), (__DIR__.'/api-doc.cache'), true);

        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.json_serializable_parser']) ? $this->services['nelmio_api_doc.parser.json_serializable_parser'] : $this->get('nelmio_api_doc.parser.json_serializable_parser')) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.collection_parser']) ? $this->services['nelmio_api_doc.parser.collection_parser'] : $this->get('nelmio_api_doc.parser.collection_parser')) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.form_errors_parser']) ? $this->services['nelmio_api_doc.parser.form_errors_parser'] : $this->get('nelmio_api_doc.parser.form_errors_parser')) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.form_type_parser']) ? $this->services['nelmio_api_doc.parser.form_type_parser'] : $this->get('nelmio_api_doc.parser.form_type_parser')) && false ?: '_'});
        $instance->addParser(${($_ = isset($this->services['nelmio_api_doc.parser.validation_parser']) ? $this->services['nelmio_api_doc.parser.validation_parser'] : $this->get('nelmio_api_doc.parser.validation_parser')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'nelmio_api_doc.form.extension.description_form_type_extension' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension
     */
    protected function getNelmioApiDoc_Form_Extension_DescriptionFormTypeExtensionService()
    {
        return $this->services['nelmio_api_doc.form.extension.description_form_type_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DescriptionFormTypeExtension();
    }

    /**
     * Gets the public 'nelmio_api_doc.formatter.html_formatter' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\HtmlFormatter
     */
    protected function getNelmioApiDoc_Formatter_HtmlFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.html_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\HtmlFormatter();

        $instance->setTemplatingEngine(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'});
        $instance->setMotdTemplate('NelmioApiDocBundle::Components/motd.html.twig');
        $instance->setApiName('Symfony API Edition');
        $instance->setEnableSandbox(true);
        $instance->setEndpoint(NULL);
        $instance->setRequestFormatMethod('accept_header');
        $instance->setRequestFormats(array('json' => 'application/json'));
        $instance->setDefaultRequestFormat('json');
        $instance->setAcceptType(NULL);
        $instance->setBodyFormats(array());
        $instance->setDefaultBodyFormat('form');
        $instance->setAuthentication(array('delivery' => 'header', 'name' => 'Authorization', 'custom_endpoint' => false));
        $instance->setDefaultSectionsOpened(true);

        return $instance;
    }

    /**
     * Gets the public 'nelmio_api_doc.formatter.markdown_formatter' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter
     */
    protected function getNelmioApiDoc_Formatter_MarkdownFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.markdown_formatter'] = new \Nelmio\ApiDocBundle\Formatter\MarkdownFormatter();
    }

    /**
     * Gets the public 'nelmio_api_doc.formatter.simple_formatter' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SimpleFormatter
     */
    protected function getNelmioApiDoc_Formatter_SimpleFormatterService()
    {
        return $this->services['nelmio_api_doc.formatter.simple_formatter'] = new \Nelmio\ApiDocBundle\Formatter\SimpleFormatter();
    }

    /**
     * Gets the public 'nelmio_api_doc.formatter.swagger_formatter' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter
     */
    protected function getNelmioApiDoc_Formatter_SwaggerFormatterService()
    {
        $this->services['nelmio_api_doc.formatter.swagger_formatter'] = $instance = new \Nelmio\ApiDocBundle\Formatter\SwaggerFormatter('dot_notation');

        $instance->setBasePath('/api');
        $instance->setApiVersion('0.1');
        $instance->setSwaggerVersion('1.2');
        $instance->setInfo(array('title' => 'Symfony2', 'description' => 'My awesome Symfony2 app!', 'TermsOfServiceUrl' => NULL, 'contact' => NULL, 'license' => NULL, 'licenseUrl' => NULL));
        $instance->setAuthenticationConfig(array('delivery' => 'header', 'name' => 'Authorization', 'custom_endpoint' => false));

        return $instance;
    }

    /**
     * Gets the public 'nelmio_api_doc.parser.collection_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\CollectionParser
     */
    protected function getNelmioApiDoc_Parser_CollectionParserService()
    {
        return $this->services['nelmio_api_doc.parser.collection_parser'] = new \Nelmio\ApiDocBundle\Parser\CollectionParser();
    }

    /**
     * Gets the public 'nelmio_api_doc.parser.form_errors_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormErrorsParser
     */
    protected function getNelmioApiDoc_Parser_FormErrorsParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_errors_parser'] = new \Nelmio\ApiDocBundle\Parser\FormErrorsParser();
    }

    /**
     * Gets the public 'nelmio_api_doc.parser.form_type_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\FormTypeParser
     */
    protected function getNelmioApiDoc_Parser_FormTypeParserService()
    {
        return $this->services['nelmio_api_doc.parser.form_type_parser'] = new \Nelmio\ApiDocBundle\Parser\FormTypeParser(${($_ = isset($this->services['form.factory']) ? $this->services['form.factory'] : $this->get('form.factory')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'nelmio_api_doc.parser.json_serializable_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\JsonSerializableParser
     */
    protected function getNelmioApiDoc_Parser_JsonSerializableParserService()
    {
        return $this->services['nelmio_api_doc.parser.json_serializable_parser'] = new \Nelmio\ApiDocBundle\Parser\JsonSerializableParser();
    }

    /**
     * Gets the public 'nelmio_api_doc.parser.validation_parser' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Parser\ValidationParser
     */
    protected function getNelmioApiDoc_Parser_ValidationParserService()
    {
        return $this->services['nelmio_api_doc.parser.validation_parser'] = new \Nelmio\ApiDocBundle\Parser\ValidationParser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the public 'nelmio_api_doc.twig.extension.extra_markdown' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension
     */
    protected function getNelmioApiDoc_Twig_Extension_ExtraMarkdownService()
    {
        return $this->services['nelmio_api_doc.twig.extension.extra_markdown'] = new \Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension();
    }

    /**
     * Gets the public 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->services['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, new \Nelmio\CorsBundle\Options\Resolver(array(0 => ${($_ = isset($this->services['nelmio_cors.options_provider.config']) ? $this->services['nelmio_cors.options_provider.config'] : $this->get('nelmio_cors.options_provider.config')) && false ?: '_'})));
    }

    /**
     * Gets the public 'nelmio_cors.options_provider.config' shared service.
     *
     * @return \Nelmio\CorsBundle\Options\ConfigProvider
     */
    protected function getNelmioCors_OptionsProvider_ConfigService()
    {
        return $this->services['nelmio_cors.options_provider.config'] = new \Nelmio\CorsBundle\Options\ConfigProvider(array('^/' => array()), array('allow_origin' => array(0 => 'http://localhost'), 'allow_credentials' => false, 'allow_headers' => array(0 => 'content-type', 1 => 'authorization'), 'expose_headers' => array(0 => 'link'), 'allow_methods' => array(0 => 'POST', 1 => 'PUT', 2 => 'GET', 3 => 'DELETE', 4 => 'OPTIONS'), 'max_age' => 3600, 'hosts' => array(), 'origin_regex' => false, 'forced_allow_origin_value' => NULL));
    }

    /**
     * Gets the public 'oneup_uploader.chunk_manager' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager
     */
    protected function getOneupUploader_ChunkManagerService()
    {
        return $this->services['oneup_uploader.chunk_manager'] = new \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager(array('maxage' => 86400, 'storage' => array('directory' => (__DIR__.'/uploader/chunks'), 'type' => 'filesystem', 'filesystem' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K', 'prefix' => 'chunks'), 'load_distribution' => true), ${($_ = isset($this->services['oneup_uploader.chunks_storage']) ? $this->services['oneup_uploader.chunks_storage'] : $this->get('oneup_uploader.chunks_storage')) && false ?: '_'});
    }

    /**
     * Gets the public 'oneup_uploader.chunks_storage' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage
     */
    protected function getOneupUploader_ChunksStorageService()
    {
        return $this->services['oneup_uploader.chunks_storage'] = new \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage((__DIR__.'/uploader/chunks'));
    }

    /**
     * Gets the public 'oneup_uploader.controller.CustomUploader' shared service.
     *
     * @return \AppBundle\Controller\FileUploadController
     */
    protected function getOneupUploader_Controller_CustomUploaderService()
    {
        return $this->services['oneup_uploader.controller.CustomUploader'] = new \AppBundle\Controller\FileUploadController($this, ${($_ = isset($this->services['oneup_uploader.storage.attachments']) ? $this->services['oneup_uploader.storage.attachments'] : $this->get('oneup_uploader.storage.attachments')) && false ?: '_'}, new \Oneup\UploaderBundle\Uploader\ErrorHandler\NoopErrorHandler(), array('frontend' => 'custom', 'custom_frontend' => array('class' => 'AppBundle\\Controller\\FileUploadController', 'name' => 'CustomUploader'), 'enable_progress' => true, 'storage' => array('directory' => ($this->targetDirs[3].'/app/../web/uploads/images'), 'service' => NULL, 'type' => 'filesystem', 'filesystem' => NULL, 'stream_wrapper' => NULL, 'sync_buffer_size' => '100K'), 'route_prefix' => '', 'allowed_mimetypes' => array(), 'disallowed_mimetypes' => array(), 'error_handler' => NULL, 'max_size' => 9223372036854775807, 'use_orphanage' => false, 'enable_cancelation' => false, 'namer' => 'oneup_uploader.namer.uniqid', 'root_folder' => false), 'attachments');
    }

    /**
     * Gets the public 'oneup_uploader.namer.uniqid' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer
     */
    protected function getOneupUploader_Namer_UniqidService()
    {
        return $this->services['oneup_uploader.namer.uniqid'] = new \Oneup\UploaderBundle\Uploader\Naming\UniqidNamer();
    }

    /**
     * Gets the public 'oneup_uploader.namer.urlsafe' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Naming\UrlSafeNamer
     */
    protected function getOneupUploader_Namer_UrlsafeService()
    {
        return $this->services['oneup_uploader.namer.urlsafe'] = new \Oneup\UploaderBundle\Uploader\Naming\UrlSafeNamer();
    }

    /**
     * Gets the public 'oneup_uploader.orphanage_manager' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager
     */
    protected function getOneupUploader_OrphanageManagerService()
    {
        return $this->services['oneup_uploader.orphanage_manager'] = new \Oneup\UploaderBundle\Uploader\Orphanage\OrphanageManager($this, array('maxage' => 604800, 'directory' => (__DIR__.'/uploader/orphanage')));
    }

    /**
     * Gets the public 'oneup_uploader.routing.loader' shared service.
     *
     * @return \Oneup\UploaderBundle\Routing\RouteLoader
     */
    protected function getOneupUploader_Routing_LoaderService()
    {
        return $this->services['oneup_uploader.routing.loader'] = new \Oneup\UploaderBundle\Routing\RouteLoader(array('attachments' => array(0 => 'oneup_uploader.controller.CustomUploader', 1 => array('enable_progress' => true, 'enable_cancelation' => false, 'route_prefix' => ''))));
    }

    /**
     * Gets the public 'oneup_uploader.storage.attachments' shared service.
     *
     * @return \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage
     */
    protected function getOneupUploader_Storage_AttachmentsService()
    {
        return $this->services['oneup_uploader.storage.attachments'] = new \Oneup\UploaderBundle\Uploader\Storage\FilesystemStorage(($this->targetDirs[3].'/app/../web/uploads/images'));
    }

    /**
     * Gets the public 'oneup_uploader.templating.uploader_helper' shared service.
     *
     * @return \Oneup\UploaderBundle\Templating\Helper\UploaderHelper
     */
    protected function getOneupUploader_Templating_UploaderHelperService()
    {
        return $this->services['oneup_uploader.templating.uploader_helper'] = new \Oneup\UploaderBundle\Templating\Helper\UploaderHelper(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, array('attachments' => 2097152.0));
    }

    /**
     * Gets the public 'oneup_uploader.twig.extension.uploader' shared service.
     *
     * @return \Oneup\UploaderBundle\Twig\Extension\UploaderExtension
     */
    protected function getOneupUploader_Twig_Extension_UploaderService()
    {
        return $this->services['oneup_uploader.twig.extension.uploader'] = new \Oneup\UploaderBundle\Twig\Extension\UploaderExtension(${($_ = isset($this->services['oneup_uploader.templating.uploader_helper']) ? $this->services['oneup_uploader.templating.uploader_helper'] : $this->get('oneup_uploader.templating.uploader_helper')) && false ?: '_'});
    }

    /**
     * Gets the public 'oneup_uploader.validation_listener.allowed_mimetype' shared service.
     *
     * @return \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener
     */
    protected function getOneupUploader_ValidationListener_AllowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.allowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\AllowedMimetypeValidationListener();
    }

    /**
     * Gets the public 'oneup_uploader.validation_listener.disallowed_mimetype' shared service.
     *
     * @return \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener
     */
    protected function getOneupUploader_ValidationListener_DisallowedMimetypeService()
    {
        return $this->services['oneup_uploader.validation_listener.disallowed_mimetype'] = new \Oneup\UploaderBundle\EventListener\DisallowedMimetypeValidationListener();
    }

    /**
     * Gets the public 'oneup_uploader.validation_listener.max_size' shared service.
     *
     * @return \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener
     */
    protected function getOneupUploader_ValidationListener_MaxSizeService()
    {
        return $this->services['oneup_uploader.validation_listener.max_size'] = new \Oneup\UploaderBundle\EventListener\MaxSizeValidationListener();
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->get('cache.app')) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->get('cache.system')) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->get('data_collector.request')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, (__DIR__.'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->get('data_collector.router')) && false ?: '_'});
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->get('data_collector.dump')) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'requestum_email_sender' shared service.
     *
     * @return \Requestum\EmailSenderBundle\Service\EmailSender
     */
    protected function getRequestumEmailSenderService()
    {
        $this->services['requestum_email_sender'] = $instance = new \Requestum\EmailSenderBundle\Service\EmailSender(${($_ = isset($this->services['swiftmailer.mailer.default']) ? $this->services['swiftmailer.mailer.default'] : $this->get('swiftmailer.mailer.default')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->get('templating')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});

        $instance->setParameters(array());

        return $instance;
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.router']) ? $this->services['monolog.logger.router'] : $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->get('config_cache_factory')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'};
        $b = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'};

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(${($_ = isset($this->services['oneup_uploader.routing.loader']) ? $this->services['oneup_uploader.routing.loader'] : $this->get('oneup_uploader.routing.loader')) && false ?: '_'});

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('AppBundle\\Entity\\User' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\EventListener\FirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'security.firewall.map.context.api' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_ApiService()
    {
        $a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $b = ${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->get('fos_oauth_server.server')) && false ?: '_'};

        return $this->services['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \FOS\OAuthServerBundle\Security\Firewall\OAuthListener($a, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, $b), 2 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, 'api', new \FOS\OAuthServerBundle\Security\EntryPoint\OAuthEntryPoint($b), NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, true), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'security.user_checker', 'security.request_matcher.e8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3', true, true, 'auth.security.user_provider', NULL, 'fos_oauth_server.security.entry_point', NULL, NULL, array(0 => 'fos_oauth')));
    }

    /**
     * Gets the public 'security.firewall.map.context.api_doc' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_ApiDocService()
    {
        return $this->services['security.firewall.map.context.api_doc'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api_doc', 'security.user_checker', 'security.request_matcher.3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcec', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the public 'security.firewall.map.context.api_registration' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_ApiRegistrationService()
    {
        $a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $b = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $c = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};

        return $this->services['security.firewall.map.context.api_registration'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => ${($_ = isset($this->services['auth.security.user_provider']) ? $this->services['auth.security.user_provider'] : $this->get('auth.security.user_provider')) && false ?: '_'}, 1 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}), 'api_registration', $b, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $c), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '59f9e7e85e7b98.73017149', $b, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}), 3 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $c, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, 'api_registration', NULL, NULL, NULL, $b, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api_registration', 'security.user_checker', 'security.request_matcher.97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298', true, false, 'auth.security.user_provider', 'api_registration', NULL, NULL, NULL, array(0 => 'anonymous')));
    }

    /**
     * Gets the public 'security.firewall.map.context.api_reset_password' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_ApiResetPasswordService()
    {
        $a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $b = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $c = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};

        return $this->services['security.firewall.map.context.api_reset_password'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => ${($_ = isset($this->services['auth.security.user_provider']) ? $this->services['auth.security.user_provider'] : $this->get('auth.security.user_provider')) && false ?: '_'}, 1 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}), 'api_reset_password', $b, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $c), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '59f9e7e85e7b98.73017149', $b, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}), 3 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $c, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, 'api_reset_password', NULL, NULL, NULL, $b, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api_reset_password', 'security.user_checker', 'security.request_matcher.645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742e', true, false, 'auth.security.user_provider', 'api_reset_password', NULL, NULL, NULL, array(0 => 'anonymous')));
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('dev', 'security.user_checker', 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $b = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $c = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => ${($_ = isset($this->services['auth.security.user_provider']) ? $this->services['auth.security.user_provider'] : $this->get('auth.security.user_provider')) && false ?: '_'}, 1 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}), 'main', $b, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $c), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '59f9e7e85e7b98.73017149', $b, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}), 3 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $c, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'}, 'main', NULL, NULL, NULL, $b, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'auth.security.user_provider', 'main', NULL, NULL, NULL, array(0 => 'anonymous')));
    }

    /**
     * Gets the public 'security.firewall.map.context.oauth_authorize' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_OauthAuthorizeService()
    {
        $a = ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'};
        $b = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $c = ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $d = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $e = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'};
        $f = ${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'};
        $g = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};

        $h = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($e, array());
        $h->setOptions(array('login_path' => '/oauth/v2/auth_login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $h->setProviderKey('oauth_authorize');

        $i = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $e, array(), $b);
        $i->setOptions(array('login_path' => '/oauth/v2/auth_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.oauth_authorize'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->getSecurity_ChannelListenerService()) && false ?: '_'}, 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($a, array(0 => ${($_ = isset($this->services['auth.security.user_provider']) ? $this->services['auth.security.user_provider'] : $this->get('auth.security.user_provider')) && false ?: '_'}, 1 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->getSecurity_User_Provider_Concrete_InMemoryService()) && false ?: '_'}), 'oauth_authorize', $b, $c, $d), 2 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $g, new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'), $e, 'oauth_authorize', $h, $i, array('check_path' => '/oauth/v2/auth_login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $b, $c, NULL), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '59f9e7e85e7b98.73017149', $b, $g), 4 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->getSecurity_AccessListenerService()) && false ?: '_'}), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $d, $e, 'oauth_authorize', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $e, '/oauth/v2/auth_login', false), NULL, NULL, $b, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('oauth_authorize', 'security.user_checker', 'security.request_matcher.e32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471', true, false, 'auth.security.user_provider', 'oauth_authorize', 'security.authentication.form_entry_point.oauth_authorize', NULL, NULL, array(0 => 'form_login', 1 => 'anonymous')));
    }

    /**
     * Gets the public 'security.firewall.map.context.oauth_token' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_OauthTokenService()
    {
        return $this->services['security.firewall.map.context.oauth_token'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('oauth_token', 'security.user_checker', 'security.request_matcher.9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccf', false, '', '', '', '', '', '', array()));
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_distribution.security_checker' shared service.
     *
     * @return \SensioLabs\Security\SecurityChecker
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the public 'sensio_distribution.security_checker.command' shared service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand(${($_ = isset($this->services['sensio_distribution.security_checker']) ? $this->services['sensio_distribution.security_checker'] : $this->get('sensio_distribution.security_checker')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->get('sensio_framework_extra.converter.manager')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.doctrine.orm']) ? $this->services['sensio_framework_extra.converter.doctrine.orm'] : $this->get('sensio_framework_extra.converter.doctrine.orm')) && false ?: '_'}, 0, 'doctrine.orm');
        $instance->add(${($_ = isset($this->services['sensio_framework_extra.converter.datetime']) ? $this->services['sensio_framework_extra.converter.datetime'] : $this->get('sensio_framework_extra.converter.datetime')) && false ?: '_'}, 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = new \Requestum\ApiBundle\Serializer\Normalizer\ObjectNormalizer(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'}))), NULL), NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'}, NULL);
        $a->setAttributeExtractionStrategy(new \Requestum\ApiBundle\Serializer\Normalizer\AttributeExtractionStrategy(${($_ = isset($this->services['core.resourse.metadata_factory']) ? $this->services['core.resourse.metadata_factory'] : $this->get('core.resourse.metadata_factory')) && false ?: '_'}));

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => ${($_ = isset($this->services['core.normalizer.pagerfanta']) ? $this->services['core.normalizer.pagerfanta'] : $this->get('core.normalizer.pagerfanta')) && false ?: '_'}, 1 => ${($_ = isset($this->services['core.normalizer.form_error']) ? $this->services['core.normalizer.form_error'] : $this->get('core.normalizer.form_error')) && false ?: '_'}, 2 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 6 => $a), array(0 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the public 'serializer.mapping.cache.symfony' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\PhpArrayAdapter
     */
    protected function getSerializer_Mapping_Cache_SymfonyService()
    {
        return $this->services['serializer.mapping.cache.symfony'] = \Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/serialization.php'), ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session(${($_ = isset($this->services['session.storage.native']) ? $this->services['session.storage.native'] : $this->get('session.storage.native')) && false ?: '_'}, new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.handler' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[2].'/sessions/dev'));
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), ${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(${($_ = isset($this->services['session.handler']) ? $this->services['session.handler'] : $this->get('session.handler')) && false ?: '_'}, ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->get('session', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        })));
    }

    /**
     * Gets the public 'stof_doctrine_extensions.uploadable.manager' shared service.
     *
     * @return \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager
     */
    protected function getStofDoctrineExtensions_Uploadable_ManagerService()
    {
        $a = new \Gedmo\Uploadable\UploadableListener(new \Stof\DoctrineExtensionsBundle\Uploadable\MimeTypeGuesserAdapter());
        $a->setAnnotationReader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $a->setDefaultFileInfoClass('Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');

        return $this->services['stof_doctrine_extensions.uploadable.manager'] = new \Stof\DoctrineExtensionsBundle\Uploadable\UploadableManager($a, 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo');
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer(${($_ = isset($this->services['swiftmailer.mailer.default.transport']) ? $this->services['swiftmailer.mailer.default.transport'] : $this->get('swiftmailer.mailer.default.transport')) && false ?: '_'});
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_FileSpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_FileSpool(($this->targetDirs[3].'/app/spool/default'));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport(${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['swiftmailer.mailer.default.spool']) ? $this->services['swiftmailer.mailer.default.spool'] : $this->get('swiftmailer.mailer.default.spool')) && false ?: '_'});

        $instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.default.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] : $this->get('swiftmailer.mailer.default.plugin.messagelogger')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), ${($_ = isset($this->services['swiftmailer.mailer.default.transport.eventdispatcher']) ? $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] : $this->getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()) && false ?: '_'});

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator(new \Symfony\Component\Translation\MessageSelector());
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'};

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->get('twig.loader')) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->get('twig.profile')) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->get('assets.packages')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router')) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(${($_ = isset($this->services['nelmio_api_doc.twig.extension.extra_markdown']) ? $this->services['nelmio_api_doc.twig.extension.extra_markdown'] : $this->get('nelmio_api_doc.twig.extension.extra_markdown')) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['oneup_uploader.twig.extension.uploader']) ? $this->services['oneup_uploader.twig.extension.uploader'] : $this->get('oneup_uploader.twig.extension.uploader')) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->get('var_dumper.cloner')) && false ?: '_'}, $d));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->get('twig.runtime.httpkernel')) && false ?: '_'};
        }, 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->get('twig.form.renderer')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->get('http_kernel')) && false ?: '_'}, 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig'), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}), NULL);
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : $this->get('templating.name_parser')) && false ?: '_'}, $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/views'), 'FOSOAuthServer');
        $instance->addPath(($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath(($this->targetDirs[3].'/src/AppBundle/Resources/views'), 'App');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(${($_ = isset($this->services['fragment.handler']) ? $this->services['fragment.handler'] : $this->get('fragment.handler')) && false ?: '_'});
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'});
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the public 'user_listener' shared service.
     *
     * @return \AppBundle\EventListener\UserListener
     */
    protected function getUserListenerService()
    {
        return $this->services['user_listener'] = new \AppBundle\EventListener\UserListener(${($_ = isset($this->services['security.password_encoder']) ? $this->services['security.password_encoder'] : $this->get('security.password_encoder')) && false ?: '_'});
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = ${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->get('validator.builder')) && false ?: '_'}->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->get('validator.email')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->get('doctrine.orm.validator.unique')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->get('security.validator.user_password')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->get('validator.expression')) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->get('annotation_reader')) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->get('doctrine.orm.validator_initializer')) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the public 'var_dumper.cli_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the public 'voter.user.owner' shared service.
     *
     * @return \AppBundle\Security\Authorization\OwnerVoter
     */
    protected function getVoter_User_OwnerService()
    {
        return $this->services['voter.user.owner'] = new \AppBundle\Security\Authorization\OwnerVoter(array(0 => 'update', 1 => 'delete'), 'AppBundle\\Entity\\User', NULL);
    }

    /**
     * Gets the public 'web_profiler.controller.exception' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, true);
    }

    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.cache' => array(0 => 'cache', 1 => '@WebProfiler/Collector/cache.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'}, $this->targetDirs[3]);
    }

    /**
     * Gets the public 'web_profiler.controller.router' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the public 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->get('twig')) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the private '1_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    protected function get1176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12fService()
    {
        return $this->services['1_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);
    }

    /**
     * Gets the private '2_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f' shared service.
     *
     * @return \Symfony\Component\Config\Resource\SelfCheckingResourceChecker
     */
    protected function get2176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12fService()
    {
        return $this->services['2_176975d76af17bfd12e2892cd2b530fcaa6e4a3c920cea730133fc58fc6ed12f'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker();
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'argument_resolver.default' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver
     */
    protected function getArgumentResolver_DefaultService()
    {
        return $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver
     */
    protected function getArgumentResolver_RequestService()
    {
        return $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.request_attribute' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver
     */
    protected function getArgumentResolver_RequestAttributeService()
    {
        return $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    protected function getArgumentResolver_ServiceService()
    {
        return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array()));
    }

    /**
     * Gets the private 'argument_resolver.session' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver
     */
    protected function getArgumentResolver_SessionService()
    {
        return $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver();
    }

    /**
     * Gets the private 'argument_resolver.variadic' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver
     */
    protected function getArgumentResolver_VariadicService()
    {
        return $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver();
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.annotations.recorder_inner']) ? $this->services['cache.annotations.recorder_inner'] : $this->getCache_Annotations_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.annotations.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Annotations_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.annotations.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('2qY5ySN2bg', 0, 'azC2XmhBppKbSs8FIqbe0M', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.app.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getCache_App_RecorderInnerService($lazyLoad = true)
    {
        $this->services['cache.app.recorder_inner'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('1u52e5pOue', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
        }

        return $instance;
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.serializer.recorder_inner']) ? $this->services['cache.serializer.recorder_inner'] : $this->getCache_Serializer_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.serializer.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Serializer_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.serializer.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Z9XmcNBpKS', 0, 'azC2XmhBppKbSs8FIqbe0M', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.system.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_System_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.system.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('HShrwtYlaf', 0, 'azC2XmhBppKbSs8FIqbe0M', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(${($_ = isset($this->services['cache.validator.recorder_inner']) ? $this->services['cache.validator.recorder_inner'] : $this->getCache_Validator_RecorderInnerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'cache.validator.recorder_inner' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getCache_Validator_RecorderInnerService($lazyLoad = true)
    {
        return $this->services['cache.validator.recorder_inner'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('w02qdJ+8Ey', 0, 'azC2XmhBppKbSs8FIqbe0M', (__DIR__.'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'console.error_listener' shared service.
     *
     * @return \Symfony\Component\Console\EventListener\ErrorListener
     */
    protected function getConsole_ErrorListenerService()
    {
        return $this->services['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(${($_ = isset($this->services['monolog.logger.console']) ? $this->services['monolog.logger.console'] : $this->get('monolog.logger.console', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->getSecurity_Access_AuthenticatedVoterService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->getSecurity_Access_RoleHierarchyVoterService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->getSecurity_Access_ExpressionVoterService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['voter.user.owner']) ? $this->services['voter.user.owner'] : $this->get('voter.user.owner')) && false ?: '_'};
        }, 4), 'affirmative', true, true));
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'})));
    }

    /**
     * Gets the private 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->get('property_accessor')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.data_collector' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->get('data_collector.form')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack')) && false ?: '_'})));
    }

    /**
     * Gets the private 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the private 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->get('translator')) && false ?: '_'}, 'validators');
    }

    /**
     * Gets the private 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->get('validator')) && false ?: '_'});
    }

    /**
     * Gets the private 'fos_oauth_server.entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getFosOauthServer_EntityManagerService()
    {
        return $this->services['fos_oauth_server.entity_manager'] = ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->get('doctrine')) && false ?: '_'}->getManager(NULL);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.authenticated_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter
     */
    protected function getSecurity_Access_AuthenticatedVoterService()
    {
        return $this->services['security.access.authenticated_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter(${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.expression_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
     */
    protected function getSecurity_Access_ExpressionVoterService()
    {
        return $this->services['security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access.role_hierarchy_voter' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter
     */
    protected function getSecurity_Access_RoleHierarchyVoterService()
    {
        return $this->services['security.access.role_hierarchy_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter(${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.access_map']) ? $this->services['security.access_map'] : $this->getSecurity_AccessMapService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        return $this->services['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap();
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.oauth_authorize']) ? $this->services['security.authentication.provider.dao.oauth_authorize'] : $this->getSecurity_Authentication_Provider_Dao_OauthAuthorizeService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.anonymous.oauth_authorize']) ? $this->services['security.authentication.provider.anonymous.oauth_authorize'] : $this->getSecurity_Authentication_Provider_Anonymous_OauthAuthorizeService()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.anonymous.api_reset_password']) ? $this->services['security.authentication.provider.anonymous.api_reset_password'] : $this->getSecurity_Authentication_Provider_Anonymous_ApiResetPasswordService()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.authentication.provider.anonymous.api_registration']) ? $this->services['security.authentication.provider.anonymous.api_registration'] : $this->getSecurity_Authentication_Provider_Anonymous_ApiRegistrationService()) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['security.authentication.provider.fos_oauth_server.api']) ? $this->services['security.authentication.provider.fos_oauth_server.api'] : $this->getSecurity_Authentication_Provider_FosOauthServer_ApiService()) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->getSecurity_Authentication_Provider_Anonymous_MainService()) && false ?: '_'};
        }, 6), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->get('debug.event_dispatcher')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.api_registration' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_ApiRegistrationService()
    {
        return $this->services['security.authentication.provider.anonymous.api_registration'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59f9e7e85e7b98.73017149');
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.api_reset_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_ApiResetPasswordService()
    {
        return $this->services['security.authentication.provider.anonymous.api_reset_password'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59f9e7e85e7b98.73017149');
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_MainService()
    {
        return $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59f9e7e85e7b98.73017149');
    }

    /**
     * Gets the private 'security.authentication.provider.anonymous.oauth_authorize' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Anonymous_OauthAuthorizeService()
    {
        return $this->services['security.authentication.provider.anonymous.oauth_authorize'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('59f9e7e85e7b98.73017149');
    }

    /**
     * Gets the private 'security.authentication.provider.dao.oauth_authorize' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     */
    protected function getSecurity_Authentication_Provider_Dao_OauthAuthorizeService()
    {
        return $this->services['security.authentication.provider.dao.oauth_authorize'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['auth.security.user_provider']) ? $this->services['auth.security.user_provider'] : $this->get('auth.security.user_provider')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'}, 'oauth_authorize', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->get('security.encoder_factory')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'security.authentication.provider.fos_oauth_server.api' shared service.
     *
     * @return \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider
     */
    protected function getSecurity_Authentication_Provider_FosOauthServer_ApiService()
    {
        return $this->services['security.authentication.provider.fos_oauth_server.api'] = new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider(${($_ = isset($this->services['auth.security.user_provider']) ? $this->services['auth.security.user_provider'] : $this->get('auth.security.user_provider')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->get('fos_oauth_server.server')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->getSecurity_UserCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(${($_ = isset($this->services['security.access_map']) ? $this->services['security.access_map'] : $this->getSecurity_AccessMapService()) && false ?: '_'}, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.api' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.api']) ? $this->services['security.firewall.map.context.api'] : $this->get('security.firewall.map.context.api')) && false ?: '_'};
        }, 'security.firewall.map.context.api_doc' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.api_doc']) ? $this->services['security.firewall.map.context.api_doc'] : $this->get('security.firewall.map.context.api_doc')) && false ?: '_'};
        }, 'security.firewall.map.context.api_registration' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.api_registration']) ? $this->services['security.firewall.map.context.api_registration'] : $this->get('security.firewall.map.context.api_registration')) && false ?: '_'};
        }, 'security.firewall.map.context.api_reset_password' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.api_reset_password']) ? $this->services['security.firewall.map.context.api_reset_password'] : $this->get('security.firewall.map.context.api_reset_password')) && false ?: '_'};
        }, 'security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->get('security.firewall.map.context.dev')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->get('security.firewall.map.context.main')) && false ?: '_'};
        }, 'security.firewall.map.context.oauth_authorize' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.oauth_authorize']) ? $this->services['security.firewall.map.context.oauth_authorize'] : $this->get('security.firewall.map.context.oauth_authorize')) && false ?: '_'};
        }, 'security.firewall.map.context.oauth_token' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.oauth_token']) ? $this->services['security.firewall.map.context.oauth_token'] : $this->get('security.firewall.map.context.oauth_token')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d']) ? $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] : $this->getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()) && false ?: '_'};
            yield 'security.firewall.map.context.oauth_token' => ${($_ = isset($this->services['security.request_matcher.9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccf']) ? $this->services['security.request_matcher.9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccf'] : $this->getSecurity_RequestMatcher_9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccfService()) && false ?: '_'};
            yield 'security.firewall.map.context.oauth_authorize' => ${($_ = isset($this->services['security.request_matcher.e32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471']) ? $this->services['security.request_matcher.e32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471'] : $this->getSecurity_RequestMatcher_E32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471Service()) && false ?: '_'};
            yield 'security.firewall.map.context.api_reset_password' => ${($_ = isset($this->services['security.request_matcher.645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742e']) ? $this->services['security.request_matcher.645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742e'] : $this->getSecurity_RequestMatcher_645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742eService()) && false ?: '_'};
            yield 'security.firewall.map.context.api_registration' => ${($_ = isset($this->services['security.request_matcher.97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298']) ? $this->services['security.request_matcher.97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298'] : $this->getSecurity_RequestMatcher_97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298Service()) && false ?: '_'};
            yield 'security.firewall.map.context.api_doc' => ${($_ = isset($this->services['security.request_matcher.3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcec']) ? $this->services['security.request_matcher.3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcec'] : $this->getSecurity_RequestMatcher_3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcecService()) && false ?: '_'};
            yield 'security.firewall.map.context.api' => ${($_ = isset($this->services['security.request_matcher.e8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3']) ? $this->services['security.request_matcher.e8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3'] : $this->getSecurity_RequestMatcher_E8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3Service()) && false ?: '_'};
            yield 'security.firewall.map.context.main' => NULL;
        }, 8));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'};

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE)) && false ?: '_'});
    }

    /**
     * Gets the private 'security.request_matcher.3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcec' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcecService()
    {
        return $this->services['security.request_matcher.3077bfab95310b28c4e70f73063e45a4438b033e21c8e4b186a5b070aa3d95f69211fcec'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/doc');
    }

    /**
     * Gets the private 'security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1dService()
    {
        return $this->services['security.request_matcher.5314eeb91110adf24b9b678372bb11bbe00e8858c519c088bfb65f525181ad3bf573fd1d'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/');
    }

    /**
     * Gets the private 'security.request_matcher.645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742e' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742eService()
    {
        return $this->services['security.request_matcher.645ea98695fe1bc45f51a56b8dbe4f028491032624248d6f460d66c62c49addca61a742e'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/users/(.*)/password', NULL, array(0 => 'PATCH', 1 => 'POST'));
    }

    /**
     * Gets the private 'security.request_matcher.97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298Service()
    {
        return $this->services['security.request_matcher.97320591ec41d1d71aa4808aa899d0c52e432283d0e2e7b9fee4a2edfba72c3e697b3298'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/users', NULL, array(0 => 'POST'));
    }

    /**
     * Gets the private 'security.request_matcher.9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccf' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccfService()
    {
        return $this->services['security.request_matcher.9aeba7fba005ca2de6ea0e58141fd0f560b96c6bfaf30a7f437ed27f98a09bf8fd4a1ccf'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/token');
    }

    /**
     * Gets the private 'security.request_matcher.e32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_E32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471Service()
    {
        return $this->services['security.request_matcher.e32d8aefb5b59880c62e1a2111aa884fc5b89d540b3c4f3f126566afd79d8eb1771d0471'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/oauth/v2/auth');
    }

    /**
     * Gets the private 'security.request_matcher.e8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestMatcher
     */
    protected function getSecurity_RequestMatcher_E8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3Service()
    {
        return $this->services['security.request_matcher.e8252d3b68a0036d971de50fe3481213180e5b38fb939d716cb8ea184fe7d5a104a954c3'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/');
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the private 'security.user.provider.concrete.in_memory' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\InMemoryUserProvider
     */
    protected function getSecurity_User_Provider_Concrete_InMemoryService()
    {
        return $this->services['security.user.provider.concrete.in_memory'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider();
    }

    /**
     * Gets the private 'security.user_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the private 'security.user_value_resolver' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver
     */
    protected function getSecurity_UserValueResolverService()
    {
        return $this->services['security.user_value_resolver'] = new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->get('security.token_storage')) && false ?: '_'});
    }

    /**
     * Gets the private 'service_locator.e64d23c3bf770e2cf44b71643280668d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getServiceLocator_E64d23c3bf770e2cf44b71643280668dService()
    {
        return $this->services['service_locator.e64d23c3bf770e2cf44b71643280668d'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('esi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.esi']) ? $this->services['fragment.renderer.esi'] : $this->get('fragment.renderer.esi')) && false ?: '_'};
        }, 'hinclude' => function () {
            return ${($_ = isset($this->services['fragment.renderer.hinclude']) ? $this->services['fragment.renderer.hinclude'] : $this->get('fragment.renderer.hinclude')) && false ?: '_'};
        }, 'inline' => function () {
            return ${($_ = isset($this->services['fragment.renderer.inline']) ? $this->services['fragment.renderer.inline'] : $this->get('fragment.renderer.inline')) && false ?: '_'};
        }, 'ssi' => function () {
            return ${($_ = isset($this->services['fragment.renderer.ssi']) ? $this->services['fragment.renderer.ssi'] : $this->get('fragment.renderer.ssi')) && false ?: '_'};
        }));
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : $this->get('file_locator')) && false ?: '_'}, __DIR__);
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'mailer_spool' => false,
        'session.save_path' => false,
        'router.resource' => false,
        'swiftmailer.spool.default.file.path' => false,
        'oneup_uploader.config.attachments' => false,
        'oneup_uploader.config' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'NelmioCorsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ),
                'StofDoctrineExtensionsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/stof/doctrine-extensions-bundle'),
                    'namespace' => 'Stof\\DoctrineExtensionsBundle',
                ),
                'FOSOAuthServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/oauth-server-bundle'),
                    'namespace' => 'FOS\\OAuthServerBundle',
                ),
                'NelmioApiDocBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle'),
                    'namespace' => 'Nelmio\\ApiDocBundle',
                ),
                'AwsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/aws/aws-sdk-php-symfony/src'),
                    'namespace' => 'Aws\\Symfony',
                ),
                'OneupUploaderBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/oneup/uploader-bundle/Oneup/UploaderBundle'),
                    'namespace' => 'Oneup\\UploaderBundle',
                ),
                'RequestumEmailSenderBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/requestum/email-sender-bundle'),
                    'namespace' => 'Requestum\\EmailSenderBundle',
                ),
                'RequestumApiBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/requestum/api-bundle'),
                    'namespace' => 'Requestum\\ApiBundle',
                ),
                'AuthBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AuthBundle'),
                    'namespace' => 'AuthBundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'DoctrineFixturesBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
            ); break;
            case 'mailer_spool': $value = array(
                'type' => 'file',
                'path' => ($this->targetDirs[3].'/app/spool'),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/sessions/dev'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing_dev.yml'); break;
            case 'swiftmailer.spool.default.file.path': $value = ($this->targetDirs[3].'/app/spool/default'); break;
            case 'oneup_uploader.config.attachments': $value = array(
                'frontend' => 'custom',
                'custom_frontend' => array(
                    'class' => 'AppBundle\\Controller\\FileUploadController',
                    'name' => 'CustomUploader',
                ),
                'enable_progress' => true,
                'storage' => array(
                    'directory' => ($this->targetDirs[3].'/app/../web/uploads/images'),
                    'service' => NULL,
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                ),
                'route_prefix' => '',
                'allowed_mimetypes' => array(

                ),
                'disallowed_mimetypes' => array(

                ),
                'error_handler' => NULL,
                'max_size' => 9223372036854775807,
                'use_orphanage' => false,
                'enable_cancelation' => false,
                'namer' => 'oneup_uploader.namer.uniqid',
                'root_folder' => false,
            ); break;
            case 'oneup_uploader.config': $value = array(
                'chunks' => array(
                    'maxage' => 86400,
                    'storage' => array(
                        'directory' => (__DIR__.'/uploader/chunks'),
                        'type' => 'filesystem',
                        'filesystem' => NULL,
                        'stream_wrapper' => NULL,
                        'sync_buffer_size' => '100K',
                        'prefix' => 'chunks',
                    ),
                    'load_distribution' => true,
                ),
                'mappings' => array(
                    'attachments' => array(
                        'frontend' => 'custom',
                        'custom_frontend' => array(
                            'class' => 'AppBundle\\Controller\\FileUploadController',
                            'name' => 'CustomUploader',
                        ),
                        'enable_progress' => true,
                        'storage' => array(
                            'directory' => ($this->targetDirs[3].'/app/../web/uploads/images'),
                            'service' => NULL,
                            'type' => 'filesystem',
                            'filesystem' => NULL,
                            'stream_wrapper' => NULL,
                            'sync_buffer_size' => '100K',
                        ),
                        'route_prefix' => '',
                        'allowed_mimetypes' => array(

                        ),
                        'disallowed_mimetypes' => array(

                        ),
                        'error_handler' => NULL,
                        'max_size' => 9223372036854775807,
                        'use_orphanage' => false,
                        'enable_cancelation' => false,
                        'namer' => 'oneup_uploader.namer.uniqid',
                        'root_folder' => false,
                    ),
                ),
                'orphanage' => array(
                    'maxage' => 604800,
                    'directory' => (__DIR__.'/uploader/orphanage'),
                ),
                'twig' => true,
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'StofDoctrineExtensionsBundle' => 'Stof\\DoctrineExtensionsBundle\\StofDoctrineExtensionsBundle',
                'FOSOAuthServerBundle' => 'FOS\\OAuthServerBundle\\FOSOAuthServerBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'AwsBundle' => 'Aws\\Symfony\\AwsBundle',
                'OneupUploaderBundle' => 'Oneup\\UploaderBundle\\OneupUploaderBundle',
                'RequestumEmailSenderBundle' => 'Requestum\\EmailSenderBundle\\RequestumEmailSenderBundle',
                'RequestumApiBundle' => 'Requestum\\ApiBundle\\RequestumApiBundle',
                'AuthBundle' => 'AuthBundle\\AuthBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => 'localhost',
            'database_port' => 3306,
            'database_name' => 'api_edition',
            'database_user' => 'root',
            'database_password' => 'root',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'cors_allow_origin' => 'http://localhost',
            'aws_key' => 'AKIAJJPAH2PM2XBENSYQ',
            'aws_secret' => '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',
            'aws_region' => NULL,
            'aws_ses_region' => NULL,
            'aws_bucket' => 'evo',
            'mailer_port' => NULL,
            'mailer_encryption' => NULL,
            'default_email_from' => 'support@witley.com',
            'varnish_urls' => array(
                0 => 'http://varnish',
            ),
            'locale' => 'en',
            'reset_password_link_template' => 'replace this text with your reset link for this {token} token',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.file' => (__DIR__.'/serialization.php'),
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.server_log' => NULL,
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'nelmio_cors.map' => array(
                '^/' => array(

                ),
            ),
            'nelmio_cors.defaults' => array(
                'allow_origin' => array(
                    0 => 'http://localhost',
                ),
                'allow_credentials' => false,
                'allow_headers' => array(
                    0 => 'content-type',
                    1 => 'authorization',
                ),
                'expose_headers' => array(
                    0 => 'link',
                ),
                'allow_methods' => array(
                    0 => 'POST',
                    1 => 'PUT',
                    2 => 'GET',
                    3 => 'DELETE',
                    4 => 'OPTIONS',
                ),
                'max_age' => 3600,
                'hosts' => array(

                ),
                'origin_regex' => false,
                'forced_allow_origin_value' => NULL,
            ),
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'stof_doctrine_extensions.event_listener.locale.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LocaleListener',
            'stof_doctrine_extensions.event_listener.logger.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\LoggerListener',
            'stof_doctrine_extensions.event_listener.blame.class' => 'Stof\\DoctrineExtensionsBundle\\EventListener\\BlameListener',
            'stof_doctrine_extensions.uploadable.manager.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadableManager',
            'stof_doctrine_extensions.uploadable.mime_type_guesser.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\MimeTypeGuesserAdapter',
            'stof_doctrine_extensions.uploadable.default_file_info.class' => 'Stof\\DoctrineExtensionsBundle\\Uploadable\\UploadedFileInfo',
            'stof_doctrine_extensions.default_locale' => 'en',
            'stof_doctrine_extensions.default_file_path' => NULL,
            'stof_doctrine_extensions.translation_fallback' => false,
            'stof_doctrine_extensions.persist_default_translation' => false,
            'stof_doctrine_extensions.skip_translation_on_load' => false,
            'stof_doctrine_extensions.uploadable.validate_writable_directory' => true,
            'stof_doctrine_extensions.listener.translatable.class' => 'Gedmo\\Translatable\\TranslatableListener',
            'stof_doctrine_extensions.listener.timestampable.class' => 'Gedmo\\Timestampable\\TimestampableListener',
            'stof_doctrine_extensions.listener.blameable.class' => 'Gedmo\\Blameable\\BlameableListener',
            'stof_doctrine_extensions.listener.sluggable.class' => 'Gedmo\\Sluggable\\SluggableListener',
            'stof_doctrine_extensions.listener.tree.class' => 'Gedmo\\Tree\\TreeListener',
            'stof_doctrine_extensions.listener.loggable.class' => 'Gedmo\\Loggable\\LoggableListener',
            'stof_doctrine_extensions.listener.sortable.class' => 'Gedmo\\Sortable\\SortableListener',
            'stof_doctrine_extensions.listener.softdeleteable.class' => 'Gedmo\\SoftDeleteable\\SoftDeleteableListener',
            'stof_doctrine_extensions.listener.uploadable.class' => 'Gedmo\\Uploadable\\UploadableListener',
            'stof_doctrine_extensions.listener.reference_integrity.class' => 'Gedmo\\ReferenceIntegrity\\ReferenceIntegrityListener',
            'fos_oauth_server.server.class' => 'OAuth2\\OAuth2',
            'fos_oauth_server.security.authentication.provider.class' => 'FOS\\OAuthServerBundle\\Security\\Authentication\\Provider\\OAuthProvider',
            'fos_oauth_server.security.authentication.listener.class' => 'FOS\\OAuthServerBundle\\Security\\Firewall\\OAuthListener',
            'fos_oauth_server.security.entry_point.class' => 'FOS\\OAuthServerBundle\\Security\\EntryPoint\\OAuthEntryPoint',
            'fos_oauth_server.server.options' => array(
                'access_token_lifetime' => 1209600,
                'refresh_token_lifetime' => 1209600,
            ),
            'fos_oauth_server.model_manager_name' => NULL,
            'fos_oauth_server.model.client.class' => 'AuthBundle\\Entity\\Client',
            'fos_oauth_server.model.access_token.class' => 'AuthBundle\\Entity\\AccessToken',
            'fos_oauth_server.model.refresh_token.class' => 'AuthBundle\\Entity\\RefreshToken',
            'fos_oauth_server.model.auth_code.class' => 'AuthBundle\\Entity\\AuthCode',
            'fos_oauth_server.template.engine' => 'twig',
            'fos_oauth_server.authorize.form.type' => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType',
            'fos_oauth_server.authorize.form.name' => 'fos_oauth_server_authorize_form',
            'fos_oauth_server.authorize.form.validation_groups' => array(
                0 => 'Authorize',
                1 => 'Default',
            ),
            'nelmio_api_doc.motd.template' => 'NelmioApiDocBundle::Components/motd.html.twig',
            'nelmio_api_doc.exclude_sections' => array(

            ),
            'nelmio_api_doc.default_sections_opened' => true,
            'nelmio_api_doc.api_name' => 'Symfony API Edition',
            'nelmio_api_doc.sandbox.enabled' => true,
            'nelmio_api_doc.sandbox.endpoint' => NULL,
            'nelmio_api_doc.sandbox.accept_type' => NULL,
            'nelmio_api_doc.sandbox.body_format.formats' => array(

            ),
            'nelmio_api_doc.sandbox.body_format.default_format' => 'form',
            'nelmio_api_doc.sandbox.request_format.method' => 'accept_header',
            'nelmio_api_doc.sandbox.request_format.default_format' => 'json',
            'nelmio_api_doc.sandbox.request_format.formats' => array(
                'json' => 'application/json',
            ),
            'nelmio_api_doc.sandbox.entity_to_choice' => true,
            'nelmio_api_doc.formatter.abstract_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\AbstractFormatter',
            'nelmio_api_doc.formatter.markdown_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\MarkdownFormatter',
            'nelmio_api_doc.formatter.simple_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SimpleFormatter',
            'nelmio_api_doc.formatter.html_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\HtmlFormatter',
            'nelmio_api_doc.formatter.swagger_formatter.class' => 'Nelmio\\ApiDocBundle\\Formatter\\SwaggerFormatter',
            'nelmio_api_doc.sandbox.authentication' => array(
                'delivery' => 'header',
                'name' => 'Authorization',
                'custom_endpoint' => false,
            ),
            'nelmio_api_doc.extractor.api_doc_extractor.class' => 'Nelmio\\ApiDocBundle\\Extractor\\ApiDocExtractor',
            'nelmio_api_doc.form.extension.description_form_type_extension.class' => 'Nelmio\\ApiDocBundle\\Form\\Extension\\DescriptionFormTypeExtension',
            'nelmio_api_doc.twig.extension.extra_markdown.class' => 'Nelmio\\ApiDocBundle\\Twig\\Extension\\MarkdownExtension',
            'nelmio_api_doc.doc_comment_extractor.class' => 'Nelmio\\ApiDocBundle\\Util\\DocCommentExtractor',
            'nelmio_api_doc.extractor.handler.fos_rest.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\FosRestHandler',
            'nelmio_api_doc.extractor.handler.jms_security.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\JmsSecurityExtraHandler',
            'nelmio_api_doc.extractor.handler.sensio_framework_extra.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\SensioFrameworkExtraHandler',
            'nelmio_api_doc.extractor.handler.phpdoc.class' => 'Nelmio\\ApiDocBundle\\Extractor\\Handler\\PhpDocHandler',
            'nelmio_api_doc.parser.collection_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\CollectionParser',
            'nelmio_api_doc.parser.form_errors_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormErrorsParser',
            'nelmio_api_doc.parser.json_serializable_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\JsonSerializableParser',
            'nelmio_api_doc.request_listener.parameter' => '_doc',
            'nelmio_api_doc.event_listener.request.class' => 'Nelmio\\ApiDocBundle\\EventListener\\RequestListener',
            'nelmio_api_doc.parser.validation_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\ValidationParser',
            'nelmio_api_doc.swagger.base_path' => '/api',
            'nelmio_api_doc.swagger.swagger_version' => '1.2',
            'nelmio_api_doc.swagger.api_version' => '0.1',
            'nelmio_api_doc.swagger.info' => array(
                'title' => 'Symfony2',
                'description' => 'My awesome Symfony2 app!',
                'TermsOfServiceUrl' => NULL,
                'contact' => NULL,
                'license' => NULL,
                'licenseUrl' => NULL,
            ),
            'nelmio_api_doc.swagger.model_naming_strategy' => 'dot_notation',
            'aws_sdk.class' => 'Aws\\Sdk',
            'oneup_uploader.chunks.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\ChunkManager',
            'oneup_uploader.chunks_storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\GaufretteStorage',
            'oneup_uploader.chunks_storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FlysystemStorage',
            'oneup_uploader.chunks_storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Chunk\\Storage\\FilesystemStorage',
            'oneup_uploader.namer.urlsafename.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UrlSafeNamer',
            'oneup_uploader.namer.uniqid.class' => 'Oneup\\UploaderBundle\\Uploader\\Naming\\UniqidNamer',
            'oneup_uploader.routing.loader.class' => 'Oneup\\UploaderBundle\\Routing\\RouteLoader',
            'oneup_uploader.storage.gaufrette.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\GaufretteStorage',
            'oneup_uploader.storage.flysystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FlysystemStorage',
            'oneup_uploader.storage.filesystem.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemStorage',
            'oneup_uploader.orphanage.class' => 'Oneup\\UploaderBundle\\Uploader\\Storage\\FilesystemOrphanageStorage',
            'oneup_uploader.orphanage.manager.class' => 'Oneup\\UploaderBundle\\Uploader\\Orphanage\\OrphanageManager',
            'oneup_uploader.controller.fineuploader.class' => 'Oneup\\UploaderBundle\\Controller\\FineUploaderController',
            'oneup_uploader.controller.blueimp.class' => 'Oneup\\UploaderBundle\\Controller\\BlueimpController',
            'oneup_uploader.controller.uploadify.class' => 'Oneup\\UploaderBundle\\Controller\\UploadifyController',
            'oneup_uploader.controller.yui3.class' => 'Oneup\\UploaderBundle\\Controller\\YUI3Controller',
            'oneup_uploader.controller.fancyupload.class' => 'Oneup\\UploaderBundle\\Controller\\FancyUploadController',
            'oneup_uploader.controller.mooupload.class' => 'Oneup\\UploaderBundle\\Controller\\MooUploadController',
            'oneup_uploader.controller.plupload.class' => 'Oneup\\UploaderBundle\\Controller\\PluploadController',
            'oneup_uploader.controller.dropzone.class' => 'Oneup\\UploaderBundle\\Controller\\DropzoneController',
            'oneup_uploader.error_handler.noop.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\NoopErrorHandler',
            'oneup_uploader.error_handler.blueimp.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\BlueimpErrorHandler',
            'oneup_uploader.error_handler.dropzone.class' => 'Oneup\\UploaderBundle\\Uploader\\ErrorHandler\\DropzoneErrorHandler',
            'oneup_uploader.chunks' => array(
                'maxage' => 86400,
                'storage' => array(
                    'directory' => (__DIR__.'/uploader/chunks'),
                    'type' => 'filesystem',
                    'filesystem' => NULL,
                    'stream_wrapper' => NULL,
                    'sync_buffer_size' => '100K',
                    'prefix' => 'chunks',
                ),
                'load_distribution' => true,
            ),
            'oneup_uploader.orphanage' => array(
                'maxage' => 604800,
                'directory' => (__DIR__.'/uploader/orphanage'),
            ),
            'oneup_uploader.controllers' => array(
                'attachments' => array(
                    0 => 'oneup_uploader.controller.CustomUploader',
                    1 => array(
                        'enable_progress' => true,
                        'enable_cancelation' => false,
                        'route_prefix' => '',
                    ),
                ),
            ),
            'oneup_uploader.maxsize' => array(
                'attachments' => 2097152.0,
            ),
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'console.command.symfony_bundle_webserverbundle_command_serverruncommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstartcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstopcommand',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand',
            ),
            'nelmio_api_doc.parser.form_type_parser.class' => 'Nelmio\\ApiDocBundle\\Parser\\FormTypeParser',
        );
    }
}
