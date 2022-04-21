<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\core\Application;

$app = new Application();

$app->router->get('/', function () {
    return 'hello world';
});
$app->router->get('/login', 'contact');

$app->run();
