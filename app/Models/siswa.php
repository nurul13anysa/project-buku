<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nama_siswa', 'username', 'email', 'password', 'class_id', 'gender', 'alamat', 'no_telpon', 'no_kendaraan', 'nis', 'nisn'
        
    ];

    public function classRoom(){
        return $this->belongsTo(ClassRoom::class,'class_id');
    }

    public function pelanggars()
    {
        return $this->hasMany(ClassRoom::class, 'siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }

}
