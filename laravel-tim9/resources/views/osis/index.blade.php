@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto">
    <h2 class="text-xl font-bold mb-4">Status Pendaftaran OSIS</h2>

    @if(session('success'))
        <div class="text-green-600 mb-2">{{ session('success') }}</div>
    @endif

    @if($osis)
        <div class="bg-white shadow rounded p-4">
            <p><strong>Nama:</strong> {{ $osis->nama_lengkap }}</p>
            <p><strong>Kelas:</strong> {{ $osis->kelas }}</p>
            <p><strong>Alasan:</strong> {{ $osis->alasan_mendaftar }}</p>
            <p><strong>Status:</strong> {{ ucfirst($osis->status) }}</p>
        </div>
    @else
        <p>Kamu belum mendaftar OSIS.</p>
        <a href="{{ route('osis.create') }}" class="inline-block mt-4 bg-blue-600 text-white px-4 py-2 rounded">Daftar Sekarang</a>
    @endif
</div>
@endsection
