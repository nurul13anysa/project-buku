<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggar extends Model
{
    protected $fillable = [
        'siswa_id',
        'tanggal',
        'kode_id',
        'keterangan',
        'petugas_id',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function kode()
    {
        return $this->belongsTo(Peraturan::class, 'kode_id');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'petugas_id', 'id');
    }

}