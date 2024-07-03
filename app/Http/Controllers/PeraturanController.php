<?php

namespace App\Http\Controllers;
use App\Models\peraturan;

use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    public function index()
    {
        $data = peraturan::all();

        $data =[
            "peraturans"=>$data
        ];
        return view('peraturan.index', $data);
    }
}
