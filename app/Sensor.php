<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensor';

    protected $fillable = [
    	'type_id',
    	'cihaz_id'
    ];

    public function cihaz()
    {
        return $this->hasOne('App\Cihaz', 'id', 'cihaz_id');
    }

    public function type()
    {
        return $this->hasOne('App\SensorType', 'id', 'type_id');
    }
}
