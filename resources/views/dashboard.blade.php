@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Dashboard Steam Kendaraan</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        <a href="{{ route('pelanggan.index') }}" class="block bg-white rounded-xl shadow p-6 hover:shadow-md transition">
            <h2 class="text-lg font-semibold text-slate-700">Pelanggan</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola data pelanggan</p>
        </a>

        <a href="{{ route('kendaraan.index') }}" class="block bg-white rounded-xl shadow p-6 hover:shadow-md transition">
            <h2 class="text-lg font-semibold text-slate-700">Kendaraan</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola data kendaraan</p>
        </a>

        <a href="{{ route('layanan.index') }}" class="block bg-white rounded-xl shadow p-6 hover:shadow-md transition">
            <h2 class="text-lg font-semibold text-slate-700">Layanan</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola paket layanan steam</p>
        </a>

        <a href="{{ route('karyawan.index') }}" class="block bg-white rounded-xl shadow p-6 hover:shadow-md transition">
            <h2 class="text-lg font-semibold text-slate-700">Karyawan</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola data karyawan</p>
        </a>

        <a href="{{ route('transaksi.index') }}" class="block bg-white rounded-xl shadow p-6 hover:shadow-md transition">
            <h2 class="text-lg font-semibold text-slate-700">Transaksi</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola transaksi steam</p>
        </a>

    </div>
@endsection