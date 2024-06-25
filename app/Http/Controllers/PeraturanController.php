<?php

namespace App\Http\Controllers;
use App\Models\peraturan;

use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    public function index()
    {
        $peraturan = Peraturan::all();
        return view('peraturan', compact('peraturan'));
    }
}
