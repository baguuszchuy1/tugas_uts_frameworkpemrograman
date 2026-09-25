@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Edit Transaksi</h1>

    <div class="bg-white rounded-xl shadow p-8 max-w-2xl">
        <form action="{{ route('transaksi.update', $transaksi) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" value="{{ old('nama_pelanggan', $transaksi->nama_pelanggan) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('nama_pelanggan') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">No Polisi</label>
                <input type="text" name="no_polisi" value="{{ old('no_polisi', $transaksi->no_polisi) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('no_polisi') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Layanan</label>
                <input type="text" name="nama_layanan" value="{{ old('nama_layanan', $transaksi->nama_layanan) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('nama_layanan') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Total Bayar</label>
                <input type="number" step="0.01" name="total_bayar" value="{{ old('total_bayar', $transaksi->total_bayar) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('total_bayar') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal Transaksi</label>
                <input type="date" name="tanggal_transaksi" value="{{ old('tanggal_transaksi', \Carbon\Carbon::parse($transaksi->tanggal_transaksi)->format('Y-m-d')) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('tanggal_transaksi') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select name="status" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                    <option value="Menunggu" {{ old('status', $transaksi->status) == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="Proses" {{ old('status', $transaksi->status) == 'Proses' ? 'selected' : '' }}>Proses</option>
                    <option value="Selesai" {{ old('status', $transaksi->status) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
                @error('status') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white text-sm font-medium px-4 py-2 rounded-lg">Update</button>
                <a href="{{ route('transaksi.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Batal</a>
            </div>
        </form>
    </div>
@endsection