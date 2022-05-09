<?php

namespace App\Packages\Shared\Services;

use App\Packages\Shared\Models\Setting;

class Helper{

    public function setting($key){
        static $settings;
        if(isset($settings[$key])){
            return $settings[$key];
        }
        $settings[$key] = $this->loadSetting($key);
        return $settings[$key];
    }

    public function opSetting($key){
        $opsetting = $this->setting('options');
        $optsetting = json_decode($opsetting,true);
        return $optsetting[$key];
    }

    public function logo(){
        $logo = \App\Packages\Shared\Models\Photo::query()
            ->where('type','=', 'logo')
            ->where('act','=','photo_static')
            ->where('hienthi','>',0)
            ->select('photo')
            ->first();
        return $logo;
    }
    public function banner(){
        $banner = \App\Packages\Shared\Models\Photo::query()
            ->where('type','=', 'logo')
            ->where('act','=','photo_static')
            ->where('hienthi','>',0)
            ->select('photo')
            ->first();
        return $banner;
    }

    public function getLang(){
        return 'vi';
    }

    private function loadSetting($key){
        $setting = Setting::all()->toArray();
        return $setting[0][$key];
    }
}