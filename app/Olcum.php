<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olcum extends Model
{
    protected $table = 'olcum';

    protected $fillable = [
    	'type_id',
    	'cihaz_id'
    	'deger',
    	'tarih'
    ];
}
