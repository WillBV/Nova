<?php

require dirname(__DIR__) . "/config/constants.php";

require_once NOVA_VENDOR_PATH.'/autoload.php';

if (class_exists('Dotenv\Dotenv') && file_exists(NOVA_BASE_PATH . '/.env')) {
    $dotenv = \Dotenv\Dotenv::createImmutable(NOVA_BASE_PATH);
    $dotenv->load();
    if (!empty(getenv("BASE_FOLDER"))) {
        $_ENV["BASE_FOLDER"] = getenv("BASE_FOLDER");
    }
}

$appType = "api";
$app     = require NOVA_VENDOR_PATH . "/vaelar/nova-api/bootstrap/bootstrap.php";
$app->run();
