<?php

namespace Application\Contracts;
interface Route{
    public function getMethod();
    public function getPath();
    public function getAction();
    public function getLength();
    public function getCompiledRoute();
    public function isDynamicRoute();

}