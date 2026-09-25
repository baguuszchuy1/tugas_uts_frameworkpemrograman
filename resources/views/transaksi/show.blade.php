@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Detail Transaksi</h1>

    <div class="bg-white rounded-xl shadow p-6 max-w-xl space-y-3">
        <div>
            <p class="text-xs uppercase text-gray-400">Nama Pelanggan</p>
            <p class="text-slate-800">{{ $transaksi->nama_pelanggan }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">No Polisi</p>
            <p class="text-slate-800">{{ $transaksi->no_polisi }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Nama Layanan</p>
            <p class="text-slate-800">{{ $transaksi->nama_layanan }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Total Bayar</p>
            <p class="text-slate-800">Rp{{ number_format($transaksi->total_bayar, 0, ',', '.') }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Tanggal Transaksi</p>
            <p class="text-slate-800">{{ \Carbon\Carbon::parse($transaksi->tanggal_transaksi)->format('d-m-Y') }}</p>
        </div>
        <div>
            <p class="text-xs uppercase text-gray-400">Status</p>
            <p class="text-slate-800">{{ $transaksi->status }}</p>
        </div>

        <div class="pt-4">
            <a href="{{ route('transaksi.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Kembali</a>
        </div>
    </div>
@endsection