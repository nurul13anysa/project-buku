<?php

namespace App\Http\Controllers;
use App\Models\class_room;

use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    public function index()
    {
        $class_room = Class_room::all();
        return view('class_room', compact('class_room'));
    }
}
