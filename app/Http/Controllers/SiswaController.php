<?php

namespace App\Http\Controllers;
use App\Models\siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = siswa::all();

        $data =[
            "siswas"=>$data
        ];
        return view('siswa.index', $data);
    }
}