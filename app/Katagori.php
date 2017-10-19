<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katagori extends Model
{
    protected $table = 'katagori_peminjaman';
    protected $primaryKey = 'id_katagori_peminjaman';
    public $timestamps = false;

    public function angsuran()
    {
      return $this->hasMany('App\Angsuran');
    }

}
