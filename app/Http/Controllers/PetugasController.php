<?php

namespace App\Http\Controllers;
use App\Models\petugas;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas', compact('petugas'));
    }
    
}
