<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
  protected $table = 'anggota';
  public $incrementing = false;
  public $timestamps = false;
  protected $primaryKey = 'id_anggota';

  public function simpanan()
  {
    return $this->hasMany('App\Simpanan');
  }

  public function pinjaman()
  {
    return $this->hasMany('App\Pinjaman');
  }

  public function angsuran()
  {
    return $this->hasMany('App\Angsuran');
  }

}
