<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Auth;

class FasilitasController extends Controller
{
    public function index()
    {
        $data = Fasilitas::orderBy('id_fasilitas', 'desc')->paginate(15);
        return view('admin.fasilitas', compact('data'));
    }

    public function create()
    {
        return view('admin.form-fasilitas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp',
        ]);

        $data = $request->all();

        $data['id_user'] = Auth::id();

        // Handle upload foto
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_fasilitas', 'public');
        }

        Fasilitas::create($data);

        return redirect()->route('fasilitas.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id_fasilitas)
    {
        $fasilitas = Fasilitas::findOrFail($id_fasilitas);
        return view('admin.edit-fasilitas', compact('fasilitas'));
    }

    public function update(Request $request, $id_fasilitas)
    {
        $fasilitas = Fasilitas::findOrFail($id_fasilitas);

        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp',
        ]);

        $data = $request->all();

        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_fasilitas', 'public');
        } else {
            unset($data['foto']);
        }

        $fasilitas->update($data);

        return redirect()->route('fasilitas.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id_fasilitas)
    {
        Fasilitas::findOrFail($id_fasilitas)->delete();
        return redirect()->route('fasilitas.index')->with('success', 'Data berhasil dihapus');
    }
}
