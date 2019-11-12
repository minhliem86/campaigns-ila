<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $connection = 'mysql3';

    public $table = 'city';

    public function center()
    {
        return $this->hasMany('App\Models\Center','id_city','id');
    }


}
