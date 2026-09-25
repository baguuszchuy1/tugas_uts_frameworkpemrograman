@extends('layouts.app')

@section('title', 'Tambah Layanan')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Tambah Layanan</h1>

    <div class="bg-white rounded-xl shadow p-8 max-w-2xl">
        <form action="{{ route('layanan.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Layanan</label>
                <input type="text" name="nama_layanan" value="{{ old('nama_layanan') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('nama_layanan') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
                <select name="kategori" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Motor" {{ old('kategori') == 'Motor' ? 'selected' : '' }}>Motor</option>
                    <option value="Mobil" {{ old('kategori') == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                </select>
                @error('kategori') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Harga</label>
                <input type="number" step="0.01" name="harga" value="{{ old('harga') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('harga') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">{{ old('deskripsi') }}</textarea>
                @error('deskripsi') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white text-sm font-medium px-4 py-2 rounded-lg">Simpan</button>
                <a href="{{ route('layanan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Batal</a>
            </div>
        </form>
    </div>
@endsection