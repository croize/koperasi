<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{

  protected $table = 'detail_angsuran';
  protected $primaryKey = 'id_detail_angsuran';
  public $timestamps = false;

    public function angsuran()
    {
      return $this->belongsTo('App\Angsuran','id_angsuran','id_angsuran');
    }
}
