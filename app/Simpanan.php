<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
  protected $table = 'simpanan';
  public $timestamps = false;
  protected $primaryKey = 'id_simpanan';

  public function anggota()
  {
    return $this->belongsTo('App\Anggota','id_anggota','id_anggota');
  }

}
