<?php

namespace App\Http\Controllers;

use App\Models\Pbdp;
use App\Models\Peminat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; 

class PbdpController extends Controller
{
    public function index()
    {
        // gunakan nama variabel $pbdp agar sesuai dengan yang dipakai di Blade
        $pbdp = Pbdp::orderBy('id_pbdp', 'desc')->paginate(15);
        $peminat = Peminat::orderBy('created_at', 'desc')->get();

        // Statistik Peminat (Trend 30 Hari Terakhir)
        $statistik = Peminat::selectRaw('DATE(created_at) as tanggal, COUNT(*) as jumlah')
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'asc')
            ->get();

        $labels = $statistik->pluck('tanggal')->map(function($date) {
            return \Carbon\Carbon::parse($date)->translatedFormat('d M');
        });
        $counts = $statistik->pluck('jumlah');

        return view('admin.pbdp', compact('pbdp', 'peminat', 'labels', 'counts'));
    }

    public function create()
    {
        return view('admin.form-pbdp');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jalur' => 'required',
            'persyaratan_khusus' => 'required',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
            
        ]);

        $data = $request->all();

        $data['id_user'] = Auth::id();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_pbdp', 'public');
        }

        Pbdp::create($data);

        return redirect()->route('pbdp.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id_pbdp)
    {
        $pbdp = Pbdp::findOrFail($id_pbdp);
        return view('admin.edit-pbdp', compact('pbdp'));
    }

    public function update(Request $request, $id_pbdp)
    {
        $pbdp = Pbdp::findOrFail($id_pbdp);

        $request->validate([
            'nama_jalur' => 'required',
            'persyaratan_khusus' => 'required',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
        ]);

        $data = $request->all();

        $data['id_user'] = Auth::id();

        if ($request->hasFile('foto')) {
            if ($pbdp->foto) {
                Storage::disk('public')->delete($pbdp->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_pbdp', 'public');
        } else {
            unset($data['foto']);
        }

        $pbdp->update($data);

        return redirect()->route('pbdp.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id_pbdp)
    {
        $pbdp = Pbdp::findOrFail($id_pbdp);

        if ($pbdp->foto) {
            Storage::disk('public')->delete($pbdp->foto);
        }
        $pbdp->delete();
        return redirect()->route('pbdp.index')->with('success', 'Data berhasil dihapus');
    }
}