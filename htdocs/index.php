<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
require __DIR__ . '/../config/config.php';

$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../var/log/application.log',
));

$app->get('/', function() {
    return json_encode('test');
});

$app->run();
