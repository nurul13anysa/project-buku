<?php

namespace App\Http\Controllers;
use App\Models\siswa;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', compact('siswa'));
    }
}