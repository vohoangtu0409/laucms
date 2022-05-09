<?php
namespace App\Home\Controllers;

use Application\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class IndexController extends BaseController{
    public function index(Request $request, Session $session, IndexRepository $repository){
        return view()->make('home::pages.home', [
            'name' => 123
        ]);
    }
}