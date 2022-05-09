<?php
namespace System\Traits;

trait Reflection{
    private function tryToResolve($concrete){
        if(class_exists($concrete))
            return $this->resolve($concrete);
        return false;
    }
    private function alreadyBind($abstract){
        if(isset($this->bind[$abstract])){
            return [$this->bind[$abstract], 1];
        }

        if(isset($this->lazyBind[$abstract])){
            return [$this->lazyBind[$abstract], 2];
        }

        if(isset($this->alias[$abstract])){
            return [$this->alias[$abstract], 3];
        }
        return null;
    }
}