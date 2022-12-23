<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => 'fab42967490897da8195bb98b0d443c1'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'magentodb',
                'dbname' => 'm2d_metro',
                'username' => 'magento',
                'password' => '654321@Bd',
                'active' => '1',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;'
            ]
        ]
    ],
     'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'magentoredis',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '2',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '1',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'metrostaple_',
                'backend' => 'Magento\Framework\Cache\Backend\Redis',
                'backend_options' => [
                    'server' => 'magentoredis',
                    'database' => '0',
                    'port' => '6379',
                    'persistent' => '',
                    'force_standalone' => '0',
                    'connect_retries' => '2',
                    'read_timeout' => '10',
                    'automatic_cleaning_factor' => '0',
                    'compress_data' => '0',
                    'compress_tags' => '0',
                    'compress_threshold' => '20480',
                    'compression_lib' => 'gzip',
                    'preload_keys' => [
                        'metrostaple_EAV_ENTITY_TYPES',
                        'metrostaple_GLOBAL_PLUGIN_LIST',
                        'metrostaple_DB_IS_UP_TO_DATE',
                        'metrostaple_SYSTEM_DEFAULT'
                    ]
                ]
            ],
            'page_cache' => [
            'id_prefix' => 'metrostaple_',
                'backend' => 'Magento\Framework\Cache\Backend\Redis',
                'backend_options' => [
                    'server' => 'magentoredis',
                    'database' => '1',
                    'port' => '6379',
                    'password' => '',
                    'persistent' => '',
                    'force_standalone' => '0',
                    'connect_retries' => '2',
                    'read_timeout' => '10',
                    'automatic_cleaning_factor' => '0',
                    'compress_data' => '1',
                    'compress_tags' => '1',
                    'compress_threshold' => '20480',
                    'compression_lib' => 'gzip'
                ]
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        '192.168.0.152:8989'
    ],
    'install' => [
        'date' => 'Fri, 03 Jan 2020 16:57:51 +0000'
    ],
    'cron_consumers_runner' => [
        'cron_run' => true,
        'max_messages' => 20000,
        'consumers' => [
            'product_action_attribute.update'
        ]
    ],
    'system' => [
        'default' => [
            'smile_elasticsuite_core_base_settings' => [
                'es_client' => [
                    'servers' => 'magentoelastic:9200',
                    'enable_https_mode' => '0'
                ]
            ]
        ]
    ]
];

