<?php

/**
 * LimeSurvey internal configuration file
 * This is required for LimeSurvey to run.
 * Generated manually to fix missing file issue.
 */

$settings = [];

$settings['rootdir'] = '/var/www/html';          // LimeSurvey root directory
$settings['publicdir'] = '/var/www/html/upload'; // Upload directory
$settings['tmpdir'] = '/var/www/html/tmp';       // Temporary/runtime directory

// Optional: if you want to include Intl PHP extension check
if (!function_exists('intl_get_error_code')) {
    error_log('PHP Intl extension is not installed.');
}