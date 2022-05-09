<?php

namespace App\Packages\Home\Controllers;

use App\Packages\Shared\Models\Setting;

class ProductController extends Controller{

    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index(){
        return view()->make('home::layout.products',[
            'setting' => $this->setting
        ]);
    }
}