<?php

namespace App\Http\Controllers;
use App\Models\point;

use Illuminate\Http\Request;

class PointController extends Controller
{
    public function index()
    {
        $data = point::all();

        $data =[
            "points"=>$data
        ];
        return view('point.index', $data);
    }
}
