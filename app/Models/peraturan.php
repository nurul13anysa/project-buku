<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    use HasFactory;
    
    public function pelanggars()
    {
        return $this->hasMany(Pelanggar::class, 'kode_id');
    }
}
