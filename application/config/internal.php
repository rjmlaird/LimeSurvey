<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Internal configuration — merge user config
 */
$userConfig = require(__DIR__ . '/config.php');

$internalConfig = array(
    'basePath' => dirname(dirname(__FILE__)),
    'name' => 'LimeSurvey',
    'defaultController' => 'surveys',
);

$result = CMap::mergeArray($internalConfig, $userConfig);

$result['components']['urlManager']['rules']['<_controller:\w+>/<_action:\w+>'] = '<_controller>/<_action>';

return $result;

/* End of file internal.php */