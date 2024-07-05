<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use Illuminate\Http\Request;

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
        // Validate input data
        $request->validate([
            'nama_petugas' => 'required|string|max:255',
        ]);

        // Save new data to the database
        $petugas = new Petugas();
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->save();

        // Redirect to index page with success message
        return redirect()->route('petugas.index')->with('success', 'Petugas has been created successfully.');
    }

    // Method to update data
    public function update(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'nama_petugas' => 'required|string|max:255',
        ]);

        // Get petugas data by ID
        $petugas = Petugas::findOrFail($id);

        // Update petugas data with new data
        $petugas->nama_petugas = $request->nama_petugas;
        $petugas->save();

        // Redirect to index page with success message
        return redirect()->route('petugas.index')->with('success', 'Petugas has been updated successfully.');
    }

    public function destroy($id)
    {
        $petugas = Petugas::where('id', $id)->first();
        $petugas->delete();

        return redirect()->route('petugas.index')->with('success', 'Petugas has been deleted successfully.');
    }
}
