<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (){
        $title = "Dashboard";
        return view('dashboard.index',['title'=> $title]);
    }

//     public function dashboard()
// {
//     $announcements = Announcement::latest()->take(5)->get();
//     $events = Event::upcoming()->take(5)->get();
//     $performances = Performance::latest()->take(5)->get();
//     // Add any other necessary data

//     return view('dashboard', compact('announcements', 'events', 'performances'));
// }

}
