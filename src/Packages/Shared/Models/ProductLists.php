<?php
namespace App\Packages\Shared\Models;

use App\Packages\Shared\Model;

class ProductLists extends Model{
    protected $table='product_list';

    public function cats(){
        $this->hasMany(ProductCats::class);
    }
}