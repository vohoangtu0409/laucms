<?php
$router = \Illuminate\Container\Container::getInstance()->get('router');
/* @var $router */
$router->setBasePath("/nina/");

$router->map('GET|POST', '', [
    '_controller' => \App\Packages\Home\Controllers\IndexController::class,
    '_action'   => 'index'
], 'home.index');
$router->map('GET|POST', 'san-pham', [
    '_controller' => \App\Packages\Home\Controllers\ProductController::class,
    '_action'   => 'index'
], 'home.products');

$router->map('GET|POST', 'index.php', 'index', 'index');
$router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
$router->map('GET|POST', 'lien-he', 'allpage', 'showLienHe');
$router->map('GET|POST', 'san-pham', 'allpage', 'showSanPham');

$router->map('GET|POST', '[a:com]', [
    '_controller' => \App\Packages\Home\Controllers\AllpageController::class,
    '_action'   => 'index'
], 'home.allpage');
$router->map('GET|POST', '[a:com]/[a:lang]/', 'allpagelang', 'lang');
$router->map('GET|POST', '[a:com]/[a:action]', 'account', 'account');
$router->map('GET', THUMBS.'/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
    global $func;
    $func->createThumb($w,$h,$z,$src,null,THUMBS);
},'thumb');
$router->map('GET', WATERMARK.'/product/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
    global $func, $wtmPro;
    $func->createThumb($w,$h,$z,$src,$wtmPro,"product");
},'watermark');
$router->map('GET', WATERMARK.'/news/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
    global $func, $wtmNews;
    $func->createThumb($w,$h,$z,$src,$wtmNews,"news");
},'watermarkNews');


