<?php
require_once 

$app  = new Application();

$router = new Router();

$router->get('/', function(){
    return 'Hello world';
});

$app->userRouter($router);

$app->run();