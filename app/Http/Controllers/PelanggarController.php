<?php

namespace App\Http\Controllers;
use App\Models\pelanggar;

use Illuminate\Http\Request;

class PelanggarController extends Controller
{
    public function index()
    {
        $data = pelanggar::all();

        $data =[
            "pelanggars"=>$data
        ];
        return view('pelanggar.index', $data);
    }
}
