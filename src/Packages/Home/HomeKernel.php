<?php

namespace App\Packages\Home;

use App\Packages\Home\Composers\DefaultComposer;
use App\Packages\Home\Composers\HomeComposer;
use App\Packages\Home\Composers\SettingComposer;
use App\Packages\Shared\Kernel;

class HomeKernel extends Kernel {

    public function register(){
        $this->loadRouter(__DIR__.DIRECTORY_SEPARATOR."routes.php");
        $this->loadView('home', __DIR__.DIRECTORY_SEPARATOR.'Resources/Views');

    }

    public function boot(){
        view()->composer('home::index',HomeComposer::class);
        view()->composer('home::index',SettingComposer::class);
    }

}