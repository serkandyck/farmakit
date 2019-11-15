<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ilce extends Model
{
    protected $table = 'ilceler';

    protected $fillable = [
    	'il_id',
    	'baslik'
    ];

    public function il() {
    	return $this->belongsTo('App\Il');
    }

    public function eczaneler() {
    	return $this->hasMany('App\User', 'ilce_id', 'id');
    }
}
