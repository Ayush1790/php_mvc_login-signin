<?php
define('BASE', dirname(__DIR__));
include_once BASE.'/variables.php';
require_once BASE_PATH.'/Library/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory(BASE_PATH.'/Models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:secret@mysql-server/testDb'
    ));
});

