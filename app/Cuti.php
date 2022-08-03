<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table='cuti';
    protected $dates = ['mulai_cuti','akhir_cuti'];
    public function pegawai()
    {
    	return $this->belongsTo('App\Pegawai');
    }
}
