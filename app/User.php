<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'ad_soyad', 'tel', 'adres', 'firma_ad', 'il_id', 'ilce_id', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function il() {
        return $this->belongsTo('App\Il');
    }

    public function ilce() {
        return $this->belongsTo('App\Ilce');
    }

    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }

    public function cihazlar()
    {
        return $this->hasMany('App\Cihaz', 'user_id', 'id');
    }
}
