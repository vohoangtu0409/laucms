<?php

namespace App\Packages\Home\Composers;

use App\Packages\Shared\Models\Photo;
use App\Packages\Shared\Models\ProductLists;
use App\Packages\Shared\Models\Setting;
use Illuminate\View\View;

class SettingComposer{

    public function compose(View $view)
    {
        $settings = Setting::all()->first();
        $lang = helper()->getLang();
        $social_top = Photo::query()
                                   ->where('type','=', 'mangxahoitop')
                                   ->where('hienthi','>',0)
                                   ->addSelect(["tenvi","tenen", "photo", "link"])
                                   ->first();
        $splistnb = ProductLists::query()
                    ->where('type','=', 'san-pham')
                    ->where('noibat','=', 1)
                    ->where('hienthi','=', 1)
                    ->addSelect(["ten$lang", "mota$lang", "tenkhongdauvi", "tenkhongdauen", "id", "photo"])
                    ->get();

        if($settings->options){
            $optsetting = json_decode($settings->options,true);
        }

        $view->with('settings', [
            'setting' => $settings->toArray(),
            'optsetting' => $optsetting ?: null,
            'social_top' => $social_top,
            'lang' => $lang,
            'splistmenu' => $splistnb,


        ]);
    }

}