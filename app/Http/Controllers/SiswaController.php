<?php

namespace App\Http\Controllers;
use App\Models\siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = siswa::with('classRoom')->get();

        $data =[
            "siswas"=>$data
        ];
        return view('siswa.index', $data);
    }
}