<?php

namespace App\Packages\Home\Composers;

use App\Packages\Shared\Models\Photo;
use App\Packages\Shared\Models\ProductLists;
use App\Packages\Shared\Models\Setting;
use Illuminate\View\View;

class HomeComposer{

    public function compose(View $view)
    {
        $session = request()->getSession();
        $lang = $session->get('lang') ?: 'vi';
        $settings = Setting::all()->first();

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
            'locale' => $lang,
            'sluglang' => 'tenkhongdau'.$lang,
            'setting' => $settings->toArray(),
            'optsetting' => $optsetting ?: null,
            'social_top' => $social_top,
            'splistmenu' => $splistnb,
        ]);
    }

}