<?php
function app($abstract = null){
    $app = \Application\App::getInstance();
    if(is_null($abstract)) return $app;
    return $app->make($abstract);
}
function request() : \Symfony\Component\HttpFoundation\Request{
    return app('request');
}
function sesion() : \Symfony\Component\HttpFoundation\Session\Session{
    return app('session');
}

function files() : \League\Flysystem\Filesystem{
    return app('files');
}

function router() : \Application\Routing\Router{
    return app('router');
}

function view() : Application\View\BladeEngine{
    return app('view');
}

function translator(): \Application\Translator\Translator{
    return app('translator');
}

function asset($url){
    $package = new \Symfony\Component\Asset\Package(
        new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy(dirname(__DIR__).'/public/build/manifest.json'));
    return $package->getUrl($url);
}

function __($key, $data = [], $lang = 'en'){
    return translator()->translate($key, $data, $lang);
}