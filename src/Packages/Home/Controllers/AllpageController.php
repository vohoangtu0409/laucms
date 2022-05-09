<?php

namespace App\Packages\Home\Controllers;

use App\Packages\Shared\Models\News;
use App\Packages\Shared\Models\Product;
use App\Packages\Shared\Models\Setting;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

class AllpageController extends Controller{

    protected $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function index(Request $request){
        $target = app('status')->get('params')['com'];
        if(!empty($target)){
            return $this->findTarget($target);
        }
    }

    private function findTarget($key){
        $product = $this->findProduct($key);
        if($product instanceof View){
            return $product;
        }

        $new = $this->findNews($key);
        if($new instanceof View){
            return $new;
        }
//        $this->findProductList($key);
//        $this->findProductCat($key);
//        $this->findProductItem($key);
//        $this->findProductSub($key);
//        $this->findNewsList($key);
//        $this->findNewsCat($key);
//        $this->findNewsItem($key);
//        $this->findNewsSub($key);
    }

    private function findProduct($key){
        $product =  Product::query()->where('tenkhongdauvi','=',$key)->first();
        if($product){
            return view()->make('home::layout.products.show',[
                'product' => $product
            ]);
        }
    }

    private function findNews($key){
        $news =  News::query()->where('tenkhongdauvi','=',$key)->first();
        if($news){
            return view()->make('home::layout.news.show',[
                'news' => $news
            ]);
        }
    }
}