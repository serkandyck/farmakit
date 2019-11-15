<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cihaz extends Model
{
    
	protected $table = 'cihazlar';

    protected $fillable = [
    	'model',
    	'mac',
    	'versiyon',
    	'user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function sensorler()
    {
        return $this->hasMany('App\Sensor', 'cihaz_id', 'id');
    }
}
