<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggar extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function Pelanggar() {
        return $this->belongsTo(Pelanggar::class);
    }
}