<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        $data = Petugas::all();

        $data = [
            "petugas" => $data
        ];
        return view('petugas.index', $data);
    }

    public function create()
    {
        $data = Petugas::all();

        $data = [
            "petugas" => $data
        ];
        return view('petugas.create', $data);
    }

    public function store(Request $request) 
    {
        // Validasi data input
        $request->validate([
            'nama_petugas' => 'required|string|max:255',
            'username'     => 'required|string|max:255',
            'email'        => 'required|email|unique:petugas,email',
            'password'     => 'nullable|string|min:8',
        ]);

        // Simpan data baru ke database
        $petugas = new Petugas();
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->username = $request->username;
        $petugas->email = $request->email;
        $petugas->password = Hash::make($request->password);        
        $petugas->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('petugas.index')->with('success', 'Petugas has been created successfully.');
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'nama_petugas' => 'required|string|max:255',
            'username'     => 'required|string|max:255',
            'email'        => 'required|email|unique:petugas,email,'.$id,
            'password'     => 'nullable|string|min:8',
        ]);

        // Dapatkan data petugas berdasarkan ID
        $petugas = Petugas::findOrFail($id);

        // Perbarui data petugas dengan data baru
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->username = $request->username;
        $petugas->email = $request->email;
        if ($request->password) {
            $petugas->password = Hash::make($request->password);
        }
        $petugas->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('petugas.index')->with('success', 'Petugas has been updated successfully.');
    }

    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        return redirect()->route('petugas.index')->with('success', 'Petugas has been deleted successfully.');
    }
}
