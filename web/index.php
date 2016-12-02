<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/Zec/views',
));

$app->get('/favicon.ico', function() use ($app){
    $imagePath =  __DIR__.'/../Clients/ClientA/images/';
    if(file_exists($imagePath.'favicon.ico')){
        return $app->sendFile($imagePath.'favicon.ico');
    }
    $app->abort(404, "favicon does not exist.");
})->bind('favicon');

$app->get('/favicon-{width}x{height}.png', function($width, $height) use ($app){
    $imagePath =  __DIR__.'/../Clients/ClientA/images/';
    $imageName = 'favicon-'.$width.'x'.$height.'.png';
    if(file_exists($imagePath.$imageName)){
        return $app->sendFile($imagePath.$imageName);
    }
    return $app->redirect($app["url_generator"]->generate("favicon"));
})->assert('width', '\d+')->assert('height', '\d+');

$app->get('/', 'Zec\\Controllers\\OnePager::bar')->bind('homepage');

$app['debug'] = true;
$app->run();