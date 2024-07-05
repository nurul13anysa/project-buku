<?php

namespace App\Http\Controllers;
use App\Models\petugas;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $data = petugas::all();

        $data =[
            "petugas"=>$data
        ];
        return view('petugas.index', $data);
    }
}