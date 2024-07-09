<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function classRoom(){
        return $this->belongsTo(ClassRoom::class);
    }
}