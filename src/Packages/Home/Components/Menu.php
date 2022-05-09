<?php

namespace App\Packages\Home\Components;

use App\Packages\Shared\Models\Setting;

class Menu{

    public function render(){
        $lang = helper()->getLang();
        $splistnb = \App\Packages\Shared\Models\ProductLists::query()
            ->where('type','=', 'san-pham')
            ->where('noibat','=', 1)
            ->where('hienthi','=', 1)
            ->addSelect(["ten$lang", "mota$lang", "tenkhongdauvi", "tenkhongdauen", "id", "photo"])
            ->get();
        $splistmenu = $splistnb;
        return view()->make('home::components.menu',[
            'splistmenu' => $splistmenu
        ]);
    }
}