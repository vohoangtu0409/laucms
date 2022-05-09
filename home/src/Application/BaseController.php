<?php

namespace Application;

abstract class BaseController
{
    public function __call($name, $arguments)
    {
        dump($name, $arguments);
    }
}