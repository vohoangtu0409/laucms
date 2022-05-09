<?php

namespace App\Packages\Home\Components;

use App\Packages\Shared\Models\Setting;

class Header{
    public function render(){
        $social_top = \App\Packages\Shared\Models\Photo::query()
            ->where('type','=', 'mangxahoitop')
            ->where('hienthi','>',0)
            ->addSelect(["tenvi","tenen", "photo", "link"])
            ->first();
        return view()->make('home::components.header',[
            'social_top' => $social_top
        ]);
    }
}