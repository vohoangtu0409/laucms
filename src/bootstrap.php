<?php
$container = Illuminate\Container\Container::getInstance();

use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

$session = new Session(new NativeSessionStorage(), new AttributeBag());
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
$request->setSession($session);


$view = new \App\Services\View\BladeEngine(
    INDEX.DIRECTORY_SEPARATOR.'resources/views',INDEX.DIRECTORY_SEPARATOR.'caches/views');
/* Template */


$db = new \Illuminate\Database\Capsule\Manager();

$db->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'nina',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => 'table_',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$db->setEventDispatcher(new Dispatcher(new Container));

// Set the cache manager instance used by connections... (optional)
//$db->setCacheManager(...);

// Make this Capsule instance available globally via static methods... (optional)
$db->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$db->bootEloquent();

$router = new AltoRouter();

$container->alias('request', \Symfony\Component\HttpFoundation\Request::class);
$container->instance('request', $request);
$container->instance('session', $session);
$container->instance('db', $db);
$container->instance('view', $view);
$container->instance('router', $router);

$app = new \App\Packages\Shared\Application(
    new \App\Packages\Home\HomeKernel(),
    $container
);
$app->register();
$app->boot();
$app->run();
