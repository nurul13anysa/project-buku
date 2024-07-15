<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::with('classRoom')->get();
        $classrooms = Classroom::all(); // Mengambil semua data classroom

        return view('siswa.index', compact('siswas','classrooms'));
    }

    public function create()
    {
        $classrooms = ClassRoom::all(); // Fetch all classrooms
        return view('siswa.create', ['classrooms' => $classrooms]);
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validasi data input
            // $request->validate([
            //     'nama_siswa'        => 'required|string|max:255',
            //     'username'          => 'required|string|max:255',
            //     'email'             => 'required|email|unique:siswas,email',
            //     'password'          => 'required|string|min:8',
            //     'class_id'             => 'required|string|max:255',
            //     'gender'            => 'required|string',
            //     'alamat'            => 'required|string|max:255',
            //     'no_telpon'         => 'required|string|max:20',
            //     'no_kendaraan'      => 'required|string|max:255',
            //     'nis'               => 'required|string|max:50',
            //     'nisn'              => 'required|string|max:50',
            // ]);

        // Simpan data baru ke dalam database
        Siswa::create([
            'nama_siswa'    => $request->nama_siswa,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => Hash::make($request->password), // Hash password
            'class_id'      => $request->class_id,
            'gender'        => $request->gender,
            'alamat'        => $request->alamat,
            'no_telpon'     => $request->no_telpon,
            'no_kendaraan'  => $request->no_kendaraan,
            'nis'           => $request->nis,
            'nisn'          => $request->nisn,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('siswa.index')->with('success', 'Siswa has been created successfully.');
    }

    public function edit($id)
    {
        $siswas = Siswa::findOrFail($id);
        $classrooms = Classroom::all(); // Mengambil semua data classroom
        return view('siswa.edit', compact('siswa', 'classrooms'));
    }


    public function update(Request $request, $id)
    {

        Siswa::where('id',$id)->update($request->except('_token','_method'));

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('siswa.index')->with('success', 'Siswa has been updated successfully.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Siswa has been deleted successfully.');
    }
}
