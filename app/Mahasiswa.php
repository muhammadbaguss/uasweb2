<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table        = 'mahasiswa';
    protected $fillable     = ['id', 'npm', 'nama_mahasiswa', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'telepon', 'alamat'];
    public    $timestamps   = false;


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



}

