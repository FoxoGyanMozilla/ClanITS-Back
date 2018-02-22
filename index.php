<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require 'vendor/autoload.php'; // Including composer dependencies
require 'config/settings.php';
//Entry point of the app
//echo "Hello World!";
$app = new \Slim\App;
//API group
$app->group('/api', function () use ($app){
    //version group
    $app->group('/v1', function () use ($app) {
        $app->get('/about', 'about');
        $app->post('/login', 'authLogin');
    });
});
// Check ./components/ for the functions.
$app->run();
?>