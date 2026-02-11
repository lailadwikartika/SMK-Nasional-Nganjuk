<?php

namespace App\Http\Controllers;

use App\Models\InformasiUmum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InformasiUmumController extends Controller
{
    public function index()
    {
        $data = InformasiUmum::orderBy('id_informasi_umum', 'desc')->paginate(15);
        return view('admin.informasi-umum', compact('data'));
    }

    public function create()
    {
        return view('admin.form-informasi-umum');
    }

    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'sejarah' => 'nullable|string',
            'foto_struktur' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_struktur')) {
            $data['foto_struktur'] = $request->file('foto_struktur')->store('foto_informasi_umum', 'public');
        }

        $data['id_user'] = Auth::id();

        InformasiUmum::create($data);

        return redirect()->route('informasi-umum.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $informasiUmum = InformasiUmum::findOrFail($id);
        return view('admin.edit-informasi-umum', compact('informasiUmum'));
    }

    public function update(Request $request, $id)
    {
        $informasiUmum = InformasiUmum::findOrFail($id);

        $request->validate([
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'sejarah' => 'nullable|string',
            'foto_struktur' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto_struktur')) {
            // Delete old photo if exists
            if ($informasiUmum->foto_struktur) {
                Storage::disk('public')->delete($informasiUmum->foto_struktur);
            }
            $data['foto_struktur'] = $request->file('foto_struktur')->store('foto_informasi_umum', 'public');
        } else {
            unset($data['foto_struktur']);
        }

        $informasiUmum->update($data);

        return redirect()->route('informasi-umum.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $informasiUmum = InformasiUmum::findOrFail($id);
        if ($informasiUmum->foto_struktur) {
            Storage::disk('public')->delete($informasiUmum->foto_struktur);
        }
        $informasiUmum->delete();
        return redirect()->route('informasi-umum.index')->with('success', 'Data berhasil dihapus');
    }

    public function visiMisi()
    {
        $data = InformasiUmum::first();
        return view('user.visi-misi', compact('data'));
    }

    public function sejarahSekolah()
    {
        $data = InformasiUmum::first();
        return view('user.sejarah-sekolah', compact('data'));
    }

    public function strukturOrganisasi()
    {
        $data = InformasiUmum::first();
        return view('user.struktur-organisasi', compact('data'));
    }
}
