<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table      = 'matkul';
    protected $fillable   = ['id', 'kd_matkul', 'nama_matkul', 'sks'];
    protected $primarykey = 'id';
    public    $timestamps = false;
}
