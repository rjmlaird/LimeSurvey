<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

return array(
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=' . getenv('LIMESURVEY_DB_HOST') . ';dbname=' . getenv('LIMESURVEY_DB_NAME') . ';charset=utf8mb4',
            'emulatePrepare' => true,
            'username' => getenv('LIMESURVEY_DB_USER'),
            'password' => getenv('LIMESURVEY_DB_PASSWORD'),
            'charset' => 'utf8mb4',
            'tablePrefix' => 'lime_',
        ),

        'urlManager' => array(
            'urlFormat' => 'get',
            'rules' => array(),
            'showScriptName' => true,
        ),
    ),
    'config' => array(
        'debug' => 0,
        'debugsql' => 0,
    )
);

/* End of file config.php */