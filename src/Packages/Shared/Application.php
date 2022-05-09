<?php

namespace App\Packages\Shared;

use App\Packages\Home\Controllers\IndexController;
use Illuminate\Container\Container;
use Symfony\Component\HttpFoundation\Response;

class Application{
    protected $container;
    protected $kernel;

    public function __construct(Kernel $kernel, Container $container)
    {
        $this->container = $container ?? Container::getInstance();
        $this->kernel = $kernel;
    }

    public function register(){
        $this->kernel->register();
    }
    public function boot(){
        $this->kernel->boot();
    }

    public function run(){
        $this->register();
        $this->boot();
        $match = $this->container->get('router')->match();
        if(is_array($match)){
            if(is_callable($match['target'])){
                call_user_func_array($match['target'], $match['params']);
            }
            $controller = $match['target']['_controller'] ?? '';
            $action = $match['target']['_action'] ?? '';
            $get_page = request()->get('p')?? 1;

            app()->bindIf('status', function () use ($match, $get_page){
                return collect([
                    'page' => $get_page,
                    'routeName' => $match['name'],
                    'params' => $match['params']
                ]);
            });

        }
        if($controller){
            $method = new \ReflectionMethod($controller, $action);
            $method->setAccessible(true);
            $parameters = $method->getParameters();
            $methodPara = [];
            foreach ($parameters as $parameter){
                $methodPara[] = app()->make($parameter->getType()->getName());
            }
            $controller = app()->make($controller);
            $result = $method->invokeArgs($controller,$methodPara);
            $response = new Response($result);
            $response->send();
        }

    }
}