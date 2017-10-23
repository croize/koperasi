<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';
    public $timestamps = false;
    protected $primaryKey = 'id_angsuran';

    public function anggota()
    {
      return $this->belongsTo('App\Anggota','id_anggota','id_anggota');
    }

    public function katagori()
    {
      return $this->belongsTo('App\Katagori','id_katagori','id_katagori_peminjaman');
    }

    public function pinjaman()
    {
      return $this->hasMany('App\Pinjaman');
    }

    public function detail()
    {
      return $this->hasMany('App\Detail');
    }

}
