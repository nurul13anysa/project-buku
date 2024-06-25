<?php

namespace App\Http\Controllers;
use App\Models\pelanggar;

use Illuminate\Http\Request;

class PelanggarController extends Controller
{
    public function index()
    {
        $pelanggar = Pelanggar::all();
        return view('pelanggar', compact('pelanggar'));
    }
}
