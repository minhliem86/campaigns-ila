<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public $connection = 'mysql3';

    public $table = 'program';

    public function product()
    {
        return $this->hasOne('App\Models\Product','id_program', 'id');
    }
}
