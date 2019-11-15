<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Il extends Model
{
    protected $table = 'iller';

    protected $fillable = [
    	'baslik'
    ];

    public function ilceler() {
    	return $this->hasMany('App\Ilce', 'il_id', 'id');
    }

    public function eczaneler() {
    	return $this->hasMany('App\User', 'il_id', 'id');
    }
}
