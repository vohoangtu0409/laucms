<?php

namespace Application\Routing;

use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use System\Traits\Singleton;

class Router
{
    use Singleton;

    protected const DYNAMIC_PATTERN = '[0-9A-Za-z]';

    /**
     *
     */
    protected const POST='POST';
    /**
     *
     */
    protected const GET='GET';

    /**
     * @var
     */
    protected $current;

    /**
     * @var array
     */
    protected $container = [];

    /**
     * @param Route $route
     */
    public function addRoute(Route $route){
        $this->container[$route->getMethod()][$route->getCompiledRoute()] = $route;
    }

    /**
     * @param $path
     * @param $data
     * @param null $callback
     * @return $this
     */
    public function addGet($path, $data, $callback = null){
        $route = new \Application\Routing\Route(self::GET, $path, $data, $callback);
        $this->addRoute($route);
        return $this;
    }

    /**
     * @param $path
     * @param $data
     * @param null $callback
     * @return $this
     */
    public function addPost($path, $data, $callback = null){
        $route = new \Application\Routing\Route(self::POST, $path, $data, $callback);
        $this->addRoute($route);
        return $this;
    }

    /**
     * @param Request $request
     * @param ...$arg
     * @throws \ReflectionException
     */
    public function resolve(Request $request, ...$arg){
        $routes = $this->getRoute($request);

        if(is_array($routes)){
            foreach ($routes as $uriRoutes){
                $preg = preg_match($uriRoutes->getCompiledRoute().'/', $request->getRequestUri());
                if($preg === 1 && $uriRoutes->isDynamicRoute()){
                    if(count(explode('/', $uriRoutes->getPath())) != count(explode('/', $request->getRequestUri()))) continue;
                    $routes = $uriRoutes;
                    break;
                }
            }
        }

        if(is_array($routes)){
            $response = new Response("Route not found", 404);
            $response->send();
            die();
        }
        return $this->sendResponse($routes);
    }
    private function getRoute(Request $request){
        $uri = $request->server->get('PATH_INFO');
        if(is_null($uri)){
            $uri = '/';
        }
        if(isset($this->container[strtoupper($request->getMethod())][$uri])){
            return $this->container[strtoupper($request->getMethod())][$uri];
        }
        return $this->container[strtoupper($request->getMethod())];
    }

    private function sendResponse(Route $route){
        if($route->isDynamicRoute()){
            $this->resolveDynamicRoute($route);
        }
        $action = $route->getAction();
        $controller = app($action['_controller']);
        $method = new \ReflectionMethod($action['_controller'], $action['_action']);
        $parameters = $method->getParameters();
        $methodPara = [];
        foreach ($parameters as $parameter){
            $methodPara[] = app($parameter->getType()->getName());
        }
        $result = $method->invokeArgs(app($action['_controller']),$methodPara);
        $response = new Response($result);
        $response->send();
    }
    private function resolveDynamicRoute(Route $route){
        $path = explode('/', $route->getPath());
        $uri = explode('/', request()->getRequestUri());

        for($i = 0; $i < count($path); $i ++){

            if(strpos($path[$i], ':') > -1){
                \request()->attributes->set(str_replace(':','', $path[$i]), $uri[$i]);
                }
            }


        dump($route->getPath(),request(), request()->get('id'),request()->get('edit'));
    }
}