<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_cuti extends Model
{
    protected $table='info_cuti';
    public $timestamps=false;
    public function pegawai()
    {
    	return $this->belongsTo('App\Pegawai');
    }
}

