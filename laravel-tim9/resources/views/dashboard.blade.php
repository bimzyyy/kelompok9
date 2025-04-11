@php
    $osis = \App\Models\OsisRegistration::where('user_id', auth()->id())->first();
@endphp

<div class="mb-6">
    <h2 class="text-lg font-semibold">Pendaftaran OSIS</h2>
    @if($osis)
        <p>Status: <strong>{{ ucfirst($osis->status) }}</strong></p>
    @else
        <a href="{{ route('osis.create') }}" class="text-blue-600 hover:underline">Daftar OSIS Sekarang</a>
    @endif
</div>
