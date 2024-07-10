<?php

namespace App\Http\Controllers;
use App\Models\Peraturan;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    // public function index()
    // {
    //     $data = Peraturan::all();

    //     $data =[
    //         "peraturan"=>$data
    //     ];
    //     return view('peraturan.index', $data);
    // }
    public function index() {
        $peraturans = Peraturan::all();
        return view('peraturan.index', compact('peraturans'));
    }
    

    public function create()
    {
        $data = Peraturan::all();

        $data =[
            "peraturan"=>$data
        ];
        return view('peraturan.create', $data);
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'kode' => 'required|string|max:255',
            'jenis_pelanggaran' => 'required|string|max:255',
            'point' => 'required|string|max:255',
            'penanganan' => 'required|string|max:255',
        ]);

        // Simpan data baru ke dalam database
        $peraturan = new Peraturan();
        $peraturan->kode = $request->kode;
        $peraturan->jenis_pelanggaran= $request->jenis_pelanggaran;
        $peraturan->point = $request->point;
        $peraturan->penanganan = $request->penanganan;
        $peraturan->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('peraturan.index')->with('success', 'Peraturan has been created successfully.');
    }

    // Method untuk mengupdate data
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'kode' => 'required|string|max:255',
            'jenis_pelanggaran' => 'required|string|max:255',
            'point' => 'required|string|max:255',
            'penanganan' => 'required|string|max:255',
        ]);

        // Ambil data kelas berdasarkan ID
        $peraturan = Peraturan ::findOrFail($id);

        // Update data kelas dengan data baru
        $peraturan->kode = $request->kode;
        $peraturan->jenis_pelanggaran = $request->jenis_pelanggaran;
        $peraturan->point = $request->point;
        $peraturan->penanganan = $request->penanganan;
        $peraturan->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('peraturan.index')->with('success', 'Peraturan has been updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $peraturan = Peraturan::where('id', $id)->first();
        $peraturan->delete();

        return redirect()->route('peraturan.index');
        // next selesaikan fitur delete sendiri
        // cari di dokumentasi laravel menggunakan Eloquent Laravel
    }
}
