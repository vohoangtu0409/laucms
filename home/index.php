<?php
include 'vendor/autoload.php';
include 'src/helper.php';

use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
$app = \Application\App::getInstance();

$session = new Session(new NativeSessionStorage(), new AttributeBag());
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$request->setSession($session);

$adapter = new \League\Flysystem\Adapter\Local(__DIR__);
$filesystem = new League\Flysystem\Filesystem($adapter);
$translator = new \Application\Translator\Translator();
$router = \Application\Routing\Router::getInstance();
$view = new \Application\View\BladeEngine(
    __DIR__.'/Views',
    __DIR__.'/Views/@cache',
    \Illuminate\Container\Container::getInstance());
$app->bindLazy(\Symfony\Component\HttpFoundation\Request::class,$request);
$app->bindLazy(\Symfony\Component\HttpFoundation\Session\Session::class,$session);
$app->bindLazy('view',$view);
$app->bind('router', $router);
$app->bind('request', $request);
$app->bind('session', $session);
$app->bind('files', $filesystem);
$app->bind('translator', $translator);

$app->registerProvider([
   \App\Home\Provider\HomeProvider::class
]);
$app->run();
