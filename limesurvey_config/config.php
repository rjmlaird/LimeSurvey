<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

return array(
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=db;port=3306;dbname=limesurvey;',
            'emulatePrepare' => true,
            'username' => 'limesurvey',
            'password' => 'changeme',
            'charset' => 'utf8mb4',
            'tablePrefix' => 'lime_',
        ),

        // Uncomment the following lines if you need table-based sessions.
        // Note: Table-based sessions are currently not supported on MSSQL server.
        // 'session' => array (
            // 'class' => 'application.core.web.DbHttpSession',
            // 'connectionID' => 'db',
            // 'sessionTableName' => '{{sessions}}',
        // ),

        'urlManager' => array(
            'urlFormat' => 'get',
            'rules' => array(
                // You can add your own rules here
            ),
            'showScriptName' => true,
        ),
    ),
    // Optional LimeSurvey-specific settings
    'config' => array(
        'debug' => 0,
        'debugsql' => 0,
        // 'force_xmlsettings_for_survey_rendering' => true,
        // 'use_asset_manager' => true,
    )
);
/* End of file config.php */
/* Location: ./application/config/config.php */