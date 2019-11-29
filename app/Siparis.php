<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    protected $table = 'siparis';

    protected $fillable = [
    	'type_id',
    	'cihaz_id'
    ];
}
