<?php
namespace Application;

/**
 *
 */
abstract class ServiceProvider implements \Application\Contracts\ServiceProvider{
    /**
     * @param $route
     */
    public function loadRoute($route){
        include $route;
    }

    /**
     * @param $namespace
     * @param $path
     */
    public function loadViewFrom($namespace, $path){
        view()->addNamespace($namespace, $path);
    }

    /**
     * @param $namspace
     * @param $path
     */
    public function loadLangFrom($namspace, $path){
        translator()->setNamespace($namspace, $path);
    }
}