<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Uuid;

class User extends Authenticatable
{
    use Notifiable;
    public $incrementing = false;

    protected static function boot()
  {
      parent::boot();
      static::creating(function ($model) {
          $model->id = (string)Uuid::generate();
      });
  }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone_num', 'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at', 'admin'
    ];


}
