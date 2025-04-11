@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto">
    <h2 class="text-xl font-bold mb-4">Form Pendaftaran OSIS</h2>

    @if(session('error'))
        <div class="text-red-600 mb-2">{{ session('error') }}</div>
    @endif

    <form action="{{ route('osis.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label>Kelas</label>
            <input type="text" name="kelas" class="w-full border rounded p-2" required>
        </div>
        <div>
            <label>Alasan Mendaftar</label>
            <textarea name="alasan_mendaftar" class="w-full border rounded p-2" required></textarea>
        </div>
        <div>
            <label>Nomor HP (opsional)</label>
            <input type="text" name="nomor_hp" class="w-full border rounded p-2">
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Daftar</button>
    </form>
</div>
@endsection
