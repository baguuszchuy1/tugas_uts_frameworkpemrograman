@extends('layouts.app')

@section('title', 'Detail Kendaraan')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Detail Kendaraan</h1>

    <div class="bg-white rounded-xl shadow p-6 max-w-xl space-y-3">
        <div>
            <p class="text-xs uppercase text-gray-400">Nama Pemilik</p>
            <p class="text-slate-800">{{ $kendaraan->nama_pemilik }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Jenis</p>
            <p class="text-slate-800">{{ $kendaraan->jenis }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Merk</p>
            <p class="text-slate-800">{{ $kendaraan->merk }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">No Polisi</p>
            <p class="text-slate-800">{{ $kendaraan->no_polisi }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Warna</p>
            <p class="text-slate-800">{{ $kendaraan->warna ?? '-' }}</p>
        </div>

        <div class="pt-4">
            <a href="{{ route('kendaraan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Kembali</a>
        </div>
    </div>
@endsection