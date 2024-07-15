<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Pelanggar;
use App\Models\Peraturan;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PelanggarController extends Controller
{
    public function index()
    {
        $pelanggars = Pelanggar::with('siswa', 'kode', 'petugas')->get();
        $siswas = Siswa::all();
        $peraturans = Peraturan::all();
        $petugas = Petugas::all();
        return view('pelanggar.index', compact('pelanggars', 'siswas', 'peraturans', 'petugas'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        $peraturans = Peraturan::all();
        $petugas = Petugas::all();
        return view('pelanggar.create', compact('siswas', 'peraturans', 'petugas'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'siswa_id' => 'required|exists:siswas,id',
        'tanggal' => 'required|date',
        'kode_id' => 'required|exists:peraturans,id',
        'keterangan' => 'nullable',
        'petugas_id' => 'required|exists:petugas,id',
    ]);

    Pelanggar::create($validatedData);

    return redirect()->route('pelanggar.index')->with('success', 'Data pelanggar berhasil ditambahkan.');
}

    public function edit($id)
    {
        $pelanggars = Pelanggar::with('siswa', 'kode', 'petugas')->findOrFail($id);
        $siswas = Siswa::all();
        $peraturans = Peraturan::all();
        $petugas = Petugas::all();
        return view('pelanggar.edit', compact('pelanggar', 'siswas', 'peraturans', 'petugas'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal' => 'required|date',
            'kode_id' => 'required|exists:peraturans,id',
            'keterangan' => 'nullable',
            'petugas_id' => 'required|exists:petugas,id',
        ]);        

        $pelanggar = Pelanggar::findOrFail($id);
        $pelanggar->update($validatedData);

        return redirect()->route('pelanggar.index')->with('success', 'Data pelanggar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pelanggar = Pelanggar::findOrFail($id);
        $pelanggar->delete();

        return redirect()->route('pelanggar.index')->with('success', 'Data pelanggar berhasil dihapus.');
    }
}