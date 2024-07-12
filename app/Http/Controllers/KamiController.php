<?php

namespace App\Http\Controllers;

use App\Models\Kami;
use Illuminate\Http\Request;

class KamiController extends Controller
{
    public function index()
    {
        return view('kami.index');
    }
}
