<?php
namespace Application\Translator;

use Application\Contracts\TranslatorInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use System\Container;
use System\Storage;

class Translator implements TranslatorInterface{
    protected $container;
    protected $storage;

    public function __construct()
    {
        $this->container = new Container();
    }
    private function setTranslation(){
    }
    public function setNamespace($namespace, $path){
        $this->container->alias($namespace, $path);
    }

    public function translate($key, $replace = [], $lang = 'en'){
        $dataKeys = $this->parseKey($key);
        $this->storage[$key.'_'.$lang] = new Storage($this->includeTranslatePath($dataKeys['namespace'], $lang));
        $translatedKey =  $this->storage[$key.'_'.$lang]->get($dataKeys['key']);
        return $this->replaceTranslatedData($translatedKey, $replace);
    }

    private function includeTranslatePath($namespace, $lang){
        return include($this->container->alias($namespace).'/'.$lang.'.php');
    }
    private function parseKey($key){
        if(($offset = strpos($key, '::')) > -1){
            $offset = explode('::', $key);
            $namespace = $offset[0];
            $key = $offset[1];
        }
        return collect([
            'namespace' => $namespace,
            'key'   => $key
        ]);
    }

    private function replaceTranslatedData($phrase, $replace = []){
        if (empty($replace)) {
            return $phrase;
        }

        $shouldReplace = [];

        foreach ($replace as $key => $value) {
            $shouldReplace[':'.Str::ucfirst($key)] = Str::ucfirst($value);
            $shouldReplace[':'.Str::upper($key)] = Str::upper($value);
            $shouldReplace[':'.$key] = $value;
        }

        return strtr($phrase, $shouldReplace);
    }
}