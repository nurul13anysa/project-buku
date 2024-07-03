<?php

namespace App\Http\Controllers;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    public function index()
    {
        $data = ClassRoom::all();

        $data =[
            "class_rooms"=>$data
        ];
        return view('class_room.index', $data);
    }

    public function create()
    {
        $data = ClassRoom::all();

        $data =[
            "class_rooms"=>$data
        ];
        return view('class_room.create', $data);
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'nama_jurusan' => 'required|string|max:255',
        ]);

        // Simpan data baru ke dalam database
        $classRoom = new ClassRoom();
        $classRoom->nama_kelas = $request->nama_kelas;
        $classRoom->nama_jurusan = $request->nama_jurusan;
        $classRoom->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('class_room.index')->with('success', 'Classroom has been created successfully.');
    }

    // Method untuk mengupdate data
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'nama_jurusan' => 'required|string|max:255',
        ]);

        // Ambil data kelas berdasarkan ID
        $classRoom = ClassRoom::findOrFail($id);

        // Update data kelas dengan data baru
        $classRoom->nama_kelas = $request->nama_kelas;
        $classRoom->nama_jurusan = $request->nama_jurusan;
        $classRoom->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('class_room.index')->with('success', 'Classroom has been updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        $class_room = ClassRoom::where('id', $id)->first();
        $class_room->delete();

        return redirect()->route('class_room.index');
        // next selesaikan fitur delete sendiri
        // cari di dokumentasi laravel menggunakan Eloquent Laravel
    }
}
