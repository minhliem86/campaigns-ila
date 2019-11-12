<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $connection = 'mysql3';

    public $table = 'program';

//    public function program()
//    {
//        return $this->belongsTo('App\Models\Program','id', 'id_program');
//    }
}
