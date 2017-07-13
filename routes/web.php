<?php


$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group([
    'middleware' => 'auth:api'
], function() use ($app) {
    $app->get('project', 'ProjectController@index');
});

$app->post('auth/login', 'Auth\AuthController@postLogin');
