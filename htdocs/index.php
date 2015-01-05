<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
require __DIR__ . '/../config/config.php';

$app->get('/', function() {
    return json_encode('test');
});

$app->run();
