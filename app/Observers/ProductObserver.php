<?php
namespace App\Observers;

use App\Models\Product;
use Cache;

class ProductObserver{
    /** Created Event */
    public function created(Product $product){
        if(Cache::has('products')){
            Cache::forget('products');
        }
    }

    public function updated(Product $product)
    {
        if(Cache::has('products')){
            Cache::forget('products');
        }
    }
}