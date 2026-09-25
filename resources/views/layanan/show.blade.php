@extends('layouts.app')

@section('title', 'Detail Layanan')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Detail Layanan</h1>

    <div class="bg-white rounded-xl shadow p-6 max-w-xl space-y-3">
        <div>
            <p class="text-xs uppercase text-gray-400">Nama Layanan</p>
            <p class="text-slate-800">{{ $layanan->nama_layanan }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Kategori</p>
            <p class="text-slate-800">{{ $layanan->kategori }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Harga</p>
            <p class="text-slate-800">Rp{{ number_format($layanan->harga, 0, ',', '.') }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Deskripsi</p>
            <p class="text-slate-800">{{ $layanan->deskripsi ?? '-' }}</p>
        </div>

        <div class="pt-4">
            <a href="{{ route('layanan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Kembali</a>
        </div>
    </div>
@endsection