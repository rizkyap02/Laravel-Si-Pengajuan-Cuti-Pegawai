<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table='pegawai';
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function cuti()
    {
    	return $this->hasMany('App\Cuti');
    }
    public function info_cuti()
    {
    	return $this->hasone('App\Info_cuti');
    }
}
