<?php

// DIC configuration

$container = $app->getContainer();

// --------------------------------------------------------------
// Service providers
// --------------------------------------------------------------

$container['view'] = function($c) {
    $view = new \Slim\Views\PhpRenderer(DIR . '/app/templates/');
    return $view;
};

// monolog
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('my_logger');
    $file_handler = new \Monolog\Handler\StreamHandler(DIR."/tmp/logs/".date('Y-m').".log");
    $logger->pushHandler($file_handler);
    return $logger;
};