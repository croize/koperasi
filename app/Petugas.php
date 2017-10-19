<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas_koperasi';
    public $timestamps = false;
    protected $primaryKey = 'id_petugas';
}
