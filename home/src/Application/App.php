<?php
namespace Application;


use Application\Routing\Router;
use System\Container;
use System\Traits\Singleton;

class App extends Container {
    protected $resolved;
    protected $alias;
    protected $serviceProviders;

    public function resolve($abstract)
    {
        if(isset($this->resolved[$abstract])){
            return $this->resolved[$abstract];
        }
        $resolved = parent::resolve($abstract);
        $this->resolved[$abstract] = $resolved;
        return $this->resolved[$abstract];
    }

    public function make($abstract){
        $resolved = parent::make($abstract);
        if(is_null($resolved)){
            return $this->resolve($abstract);
        }
        return $resolved;
    }

    public function registerProvider(array $services){
        foreach ($services as $service){
            $provider = $this->resolve($service);
            $provider->boot();
            unset($this->resolved[$service]);
        }
    }

    public function run(){
        $router = Router::getInstance();
        $router->resolve(request());
    }
}