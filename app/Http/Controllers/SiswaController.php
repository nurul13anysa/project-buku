<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_siswa'        => 'required|string|max:255',
            'username'          => 'required|string|max:255',
            'email'             => 'required|email|unique:siswas,email',
            'password'          => 'required|string|min:8',
            'class'             => 'required|string|max:255',
            'gender'            => 'required|string',
            'alamat'            => 'required|string|max:255',
            'no_telpon'         => 'required|string|max:20',
            'no_kendaraan'      => 'required|string|max:255',
            'nis'               => 'required|string|max:50',
            'nisn'              => 'required|string|max:50',
        ]);

        // Simpan data baru ke dalam database
        Siswa::create([
            'nama_siswa'    => $request->nama_siswa,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => Hash::make($request->password), // Hash password
            'class'         => $request->class,
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
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_siswa'        => 'required|string|max:255',
            'username'          => 'required|string|max:255',
            'email'             => 'required|email|unique:siswas,email,'.$id,
            'password'          => 'nullable|string|min:8',
            'class'             => 'required|string|max:255',
            'gender'            => 'required|string',
            'alamat'            => 'required|string|max:255',
            'no_telpon'         => 'required|string|max:20',
            'no_kendaraan'      => 'required|string|max:255',
            'nis'               => 'required|string|max:50',
            'nisn'              => 'required|string|max:50',
        ]);

        // Ambil data siswa berdasarkan ID
        $siswa = Siswa::findOrFail($id);

        // Update data siswa dengan data baru
        $siswa->update([
            'nama_siswa'    => $request->nama_siswa,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => $request->password ? Hash::make($request->password) : $siswa->password,
            'class'         => $request->class,
            'gender'        => $request->gender,
            'alamat'        => $request->alamat,
            'no_telpon'     => $request->no_telpon,
            'no_kendaraan'  => $request->no_kendaraan,
            'nis'           => $request->nis,
            'nisn'          => $request->nisn,
        ]);

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
