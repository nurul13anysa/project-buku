<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index (){
        $title = "Dashboard";
        return view('dashboard',['title'=> $title]);
    }
}
