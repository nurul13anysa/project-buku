<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Petugas;
use App\Models\ClassRoom;
use App\Models\Peraturan;
use App\Models\Pelanggar;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        
        // Hitung jumlah data dari masing-masing tabel
        $totalSiswa = Siswa::count();
        $totalPetugas = Petugas::count();
        $totalClassRoom = ClassRoom::count();
        $totalPeraturan = Peraturan::count();
        $totalPelanggar = Pelanggar::count();
        
        // Kirim data ke view
        return view('dashboard.index', compact('title', 'totalSiswa', 'totalPetugas', 'totalClassRoom', 'totalPeraturan', 'totalPelanggar'));
    }
}
