<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'jenis_pelanggaran',
        'point',
        'point_id'
    ];
}
