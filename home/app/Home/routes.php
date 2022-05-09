<?php
router()->addGet('/',[
    '_controller' => \App\Home\Controllers\IndexController::class,
    '_action'   => 'index'
]);

router()->addGet('/home/:id',[
    '_controller' => \App\Home\Controllers\IndexController::class,
    '_action'   => 'home'
]);

router()->addGet('/home/:id/account',[
    '_controller' => \App\Home\Controllers\IndexController::class,
    '_action'   => 'index'
]);
router()->addGet('/home/:id/account/:edit',[
    '_controller' => \App\Home\Controllers\IndexController::class,
    '_action'   => 'indexedit'
]);