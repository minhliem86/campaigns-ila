<?php
namespace App\Observers;

use App\Models\City;
use Cache;

class CityObserver{
    /** Created Event */
    public function created(City $city){
        if(Cache::has('cities')){
            Cache::forget('cities');
        }
    }

    public function updated(City $city)
    {
        if(Cache::has('cities')){
            Cache::forget('cities');
        }
    }
}