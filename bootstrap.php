<?php

use Core\App;

$container = new \Core\Container();
App::setContainer($container);

App::bind(\Core\Database\QueryBuilder::class, function () {
    $config = require base_path('core/config/database.php');
    $connection = Core\Database\Connection::getInstance($config)->getConnect();
    return new \Core\Database\QueryBuilder($connection);
});