<?php

namespace App\Http\Controllers;
use App\Models\point;

use Illuminate\Http\Request;

class PointController extends Controller
{
    public function index()
    {
        $point = Point::all();
        return view('point', compact('point'));
    }
}
