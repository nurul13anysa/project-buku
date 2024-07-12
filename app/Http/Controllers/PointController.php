<?php

namespace App\Http\Controllers;
use App\Models\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function index()
    {
        $data = Point::all();

        $data =[
            "points"=>$data
        ];
        return view('point.index', $data);
    }

    public function create()
    {
        $data = Point::all();

        $data =[
            "points"=>$data
        ];
        return view('point.create', $data);
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'class' => 'required|string|max:255',
            'tugas_penanganan' => 'required|string|max:255',
            'pelanggaran' => 'required|string|max:20',
            'keterangan' => 'required|string|max:255',
        ]);

        // Simpan data baru ke dalam database
        $point = new Point();
        $point->id = $request->id;
        $point->nama_siswa = $request->nama_siswa;
        $point->tanggal = $request->tanggal;
        $point->class = $request->class;
        $point->tugas_penanganan = $request->tugas_penanganan;
        $point->pelanggaran = $request->pelanggaran;
        $point->keterangan = $request->keterangan;
        $point->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('point.index')->with('success', 'Point has been created successfully.');
    }

    // Method untuk mengupdate data
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'class' => 'required|string|max:255',
            'tugas_penanganan' => 'required|string|max:255',
            'pelanggaran' => 'required|string|max:20',
            'keterangan' => 'required|string|max:255',
        ]);

        // Ambil data point berdasarkan ID
        $point = Point::findOrFail($id);

        // Update data point dengan data baru
        $point->nama_siswa = $request->nama_siswa;
        $point->tanggal = $request->tanggal;
        $point->class = $request->class;
        $point->tugas_penanganan = $request->tugas_penanganan;
        $point->pelanggaran = $request->pelanggaran;
        $point->keterangan = $request->keterangan;
        $point->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('point.index')->with('success', 'Point has been updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $point = Point::where('id', $id)->first();
        $point->delete();

        return redirect()->route('point.index')->with('success', 'Point has been deleted successfully.');
        // next selesaikan fitur delete sendiri
        // cari di dokumentasi laravel menggunakan Eloquent Laravel
    }
}
