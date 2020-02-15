<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    protected $table = 'ayarlar';

    protected $fillable = [
    	'cihaz_id',
    	'ortam_min',
    	'ortam_maks',
    	'dolap_min',
    	'dolap_maks',
    	'nem_min',
    	'nem_maks',
    	'olcum_aralik',
    	'cihaz_bildirim'
    ];
}
