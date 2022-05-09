<?php

namespace Application\Routing;

class Route
{
    protected $method;
    protected $path;
    protected $action;
    protected $compiledRoute;
    protected $length = 0;
    protected $type;
    public const DYNAMIC_PATTERN = '[0-9A-Za-z]+';
    public const DYNAMIC = 'DYNAMIC';
    public const STATIC = 'STATIC';
    /**
     * @param $method
     * @param $path
     * @param $handle
     * @param $action
     */
    public function __construct($method, $path, $action)
    {
        $this->method = $method;
        $this->path = $path;
        $this->action = $action;
        $this->compiledRoute($method, $path, $action);
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getCompiledRoute()
    {
        return $this->compiledRoute;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    private function compiledRoute($method, $path, $action){
        $this->compiledRoute = $this->getPath();
        if($this->isDynamicRoute()){
            $tmp = explode('/', $this->getPath());
            $this->length = count($tmp);
            foreach ($tmp as $uri){
                if(strpos($uri, ':') > -1){
                    $this->compiledRoute = str_replace($uri, self::DYNAMIC_PATTERN, $this->compiledRoute);
                }
            }
            $this->compiledRoute = '/'.str_replace('/', '\/', $this->compiledRoute);
        }

    }

    public function isDynamicRoute(){
        $this->type = strpos($this->getPath(), ':') != false ? self::DYNAMIC : self::STATIC;
        if($this->type === self::DYNAMIC) return true;
        return false;
    }


}