<?php

namespace App\Packages\Shared;

abstract class Kernel{
    public function loadRouter($routes){
        include $routes;
    }
    public function loadView($namespace, $hint){
        view()->addNamespace($namespace, $hint);
    }
    abstract function register();
    abstract function boot();
}