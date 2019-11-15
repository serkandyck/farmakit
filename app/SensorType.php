<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SensorType extends Model
{
    protected $table = 'sensor_type';

    protected $fillable = [
    	'baslik'
    ];

    public function sensorler()
    {
        return $this->hasMany('App\Sensor', 'type_id', 'id');
    }
}
