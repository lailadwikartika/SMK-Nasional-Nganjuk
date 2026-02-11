<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminat;

class PeminatController extends Controller
{
    public function submitPendaftaran(Request $request)
    {
        try {
            // Validasi data
            $validated = $request->validate([
                'nama_lengkap' => 'required|string|max:100',
                'no_hp' => 'required|string|max:15',
                'alamat' => 'required|string',
                'asal_sekolah' => 'required|string|max:100',
                'jalur_id' => 'nullable|exists:pbdp,id_pbdp',
            ]);

            // Mapping jalur_id to id_pbdp if it exists
            $data = $validated;
            if ($request->has('jalur_id')) {
                $data['id_pbdp'] = $request->jalur_id;
            }
            unset($data['jalur_id']);

            // Simpan data peminat
            $peminat = Peminat::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Terima kasih! Data Anda telah kami simpan. Kami akan segera menghubungi Anda.',
                'data' => [
                    'nama' => $peminat->nama_lengkap,
                    'tanggal' => $peminat->created_at->format('d/m/Y H:i:s')
                ]
            ]);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal: ' . implode(', ', \Illuminate\Support\Arr::flatten($e->errors())),
            ], 422);
            
        } catch (\Exception $e) {
            \Log::error('Error Peminat: ' . $e->getMessage());
            
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan. Silakan coba lagi nanti.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    // Menampilkan semua peminat
    public function index()
    {
        $peminat = Peminat::orderBy('created_at', 'desc')->get();
        return view('admin.peminat.index', compact('peminat'));
    }

    // Menampilkan detail peminat
    public function show($id)
    {
        $peminat = Peminat::findOrFail($id);
        return view('admin.peminat.show', compact('peminat'));
    }
}

