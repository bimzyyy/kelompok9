<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OsisRegistrationController extends Controller
{
    public function index()
    {
        $osis = OsisRegistration::where('user_id', Auth::id())->first();
        return view('osis.index', compact('osis'));
    }

    public function create()
    {
        if (OsisRegistration::where('user_id', Auth::id())->exists()) {
            return redirect()->route('osis.index')->with('error', 'Kamu sudah mendaftar OSIS.');
        }

        return view('osis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'alasan_mendaftar' => 'required|string',
            'nomor_hp' => 'nullable|string|max:15',
        ]);

        OsisRegistration::create([
            'user_id' => Auth::id(),
            'nama_lengkap' => $request->nama_lengkap,
            'kelas' => $request->kelas,
            'alasan_mendaftar' => $request->alasan_mendaftar,
            'nomor_hp' => $request->nomor_hp,
        ]);

        return redirect()->route('osis.index')->with('success', 'Pendaftaran OSIS berhasil!');
    }
}
