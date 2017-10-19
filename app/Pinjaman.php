<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjaman';
    protected $primaryKey = 'id_pinjaman';
    public $timestamps = false;

    public function anggota()
    {
      return $this->belongsTo('App\Anggota','id_anggota','id_anggota');
    }

    public function angsuran()
    {
      return $this->belongsTo('App\Angsuran','id_angsuran','id_angsuran');
    }

}
