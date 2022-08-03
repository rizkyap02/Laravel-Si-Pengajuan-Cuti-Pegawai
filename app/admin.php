<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use Notifiable;

    protected $table='pegawai';
    protected $guard='admin';
    protected $fillable = [
        'nama','nip','password',
    ];

    protected $hidden = [
      'password','remember_token',
    ];
}
