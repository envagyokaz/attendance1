<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sendgrid/php-http-client' => array(
            'pretty_version' => '3.9.6',
            'version' => '3.9.6.0',
            'reference' => 'e9a04d949ee2d19938ab83dc100933a3b41a8ec7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sendgrid/php-http-client',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sendgrid/sendgrid' => array(
            'pretty_version' => '7.3.0',
            'version' => '7.3.0.0',
            'reference' => '37fa19d3ae019842f07a2a43e92ed0f566ad927d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sendgrid/sendgrid',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sendgrid/sendgrid-php' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
