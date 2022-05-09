<?php
namespace App\Packages\Shared\Models;

use App\Packages\Shared\Model;

class ProductCats extends Model{
    protected $table='product_cat';

    public function list(){
        $this->hasOne(ProductCats::class);
    }
}