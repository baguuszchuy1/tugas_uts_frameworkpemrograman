@extends('layouts.app')

@section('title', 'Detail Pelanggan')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Detail Pelanggan</h1>

    <div class="bg-white rounded-xl shadow p-6 max-w-xl space-y-3">
        <div>
            <p class="text-xs uppercase text-gray-400">Nama</p>
            <p class="text-slate-800">{{ $pelanggan->nama }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">No HP</p>
            <p class="text-slate-800">{{ $pelanggan->no_hp }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Alamat</p>
            <p class="text-slate-800">{{ $pelanggan->alamat ?? '-' }}</p>
        </div>

        <div class="pt-4">
            <a href="{{ route('pelanggan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Kembali</a>
        </div>
    </div>
@endsection