<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olcum extends Model
{
    protected $table = 'olcum';

    protected $fillable = [
    	'sensor_id',
    	'deger',
    	'tarih'
    ];
}
