<?php

function app($abtract = null)
{
    if(is_null($abtract)){
        return \Illuminate\Container\Container::getInstance();
    }
    return \Illuminate\Container\Container::getInstance()->make($abtract);
}

function helper(): \App\Packages\Shared\Services\Helper{
    return app(\App\Packages\Shared\Services\Helper::class);
}


function view() : \App\Services\View\BladeEngine{
    return app()->get('view');
}
function request(){
    return app()->get('request');
}