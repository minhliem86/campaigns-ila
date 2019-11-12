<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyranb\Footprints\TrackRegistrationAttribution;

class Customer extends Model
{
    public $connection = 'mysql2';

    public $table = 'customer';

    protected $guarded = ['id'];

    public $timestamps = false;
}
