<?php

namespace App\Http\Controllers;
use App\Models\pelanggar;
use Illuminate\Http\Request;

class pelanggarController extends Controller
{
    public function index()
    {
        $data = pelanggar::all();

        $data =[
            "pelanggars"=>$data
        ];
        return view('pelanggar.index', $data);
    }

    public function create()
    {
        return view('pelanggar.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'no' => 'required|string|max:255',
            'nama_siswa' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'kode_pelanggaran' => 'required|string|max:255',
            'point' => 'required|string|max:255',
            'penanganan' => 'required|string|max:255',
            'nama_petugas' => 'required|string|max:255',
        ]);

        // Simpan data baru ke dalam database
        $pelanggar = new pelanggar();
        $pelanggar->no = $request->no;
        $pelanggar->nama_siswa = $request->nama_siswa;
        $pelanggar->tanggal = $request->tanggal;
        $pelanggar->class = $request->class;
        $pelanggar->kode_pelanggaran = $request->kode_pelanggaran;
        $pelanggar->point = $request->point;
        $pelanggar->penanganan = $request->penanganan;
        $pelanggar->nama_petugas = $request->nama_petugas;
        $pelanggar->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelanggar.index')->with('success', 'pelanggar has been created successfully.');
    }

    // Method untuk mengupdate data
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'no' => 'required|string|max:255',
            'nama_siswa' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'kode_pelanggaran' => 'required|string|max:255',
            'point' => 'required|string|max:255',
            'penanganan' => 'required|string|max:255',
            'nama_petugas' => 'required|string|max:255',
        ]);

        // Ambil data kelas berdasarkan ID
        $classRoom = pelanggar::findOrFail($id);

        // Update data kelas dengan data baru
        $pelanggar->no = $request->no;
        $pelanggar->nama_siswa = $request->nama_siswa;
        $pelanggar->tanggal = $request->tanggal;
        $pelanggar->class = $request->;
        $pelanggar->kode_pelanggaran = $request->kode_pelanggaran;
        $pelanggar->point = $request->point;
        $pelanggar->penanganan = $request->penanganan;
        $pelanggar->nama_petugas = $request->nama_petugas;
        $pelanggar->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pelanggar.index')->with('success', 'pelanggar has been updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $pelanggar = pelanggar::where('id', $id)->first();
        $pelanggar->delete();

        return redirect()->route('pelanggar.index');
        // next selesaikan fitur delete sendiri
        // cari di dokumentasi laravel menggunakan Eloquent Laravel
    }
}
