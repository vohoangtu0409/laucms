<?php

namespace App\Packages\Dashboard;

use App\Packages\Home\Components\Header;
use App\Packages\Shared\Kernel;

class DashboardKernel extends Kernel {

    public function register(){
        $this->loadRouter(__DIR__.DIRECTORY_SEPARATOR."routes.php");
        $this->loadView('dashboard', __DIR__.DIRECTORY_SEPARATOR.'Resources/Views');
    }

}