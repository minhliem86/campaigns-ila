<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    public $connection = 'mysql3';

    public $table = 'center';

    public function city()
    {
        return $this->belongsTo('App\Models\City','id','id_city');
    }
}
