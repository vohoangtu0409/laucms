<?php

namespace App\Packages\Home;

use App\Packages\Home\Components\Header;
use App\Packages\Shared\Kernel;

class HomeKernel extends Kernel {

    public function register(){
        $this->loadRouter(__DIR__.DIRECTORY_SEPARATOR."routes.php");
        $this->loadView('home', __DIR__.DIRECTORY_SEPARATOR.'Resources/Views');

    }
    public function handle($match){
    }

}