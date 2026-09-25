@extends('layouts.app')

@section('title', 'Tambah Pelanggan')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Tambah Pelanggan</h1>

    <div class="bg-white rounded-xl shadow p-8 max-w-2xl">
        <form action="{{ route('pelanggan.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" value="{{ old('nama') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('nama') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">No HP</label>
                <input type="text" name="no_hp" value="{{ old('no_hp') }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('no_hp') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea name="alamat" rows="3" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">{{ old('alamat') }}</textarea>
                @error('alamat') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-sky-600 hover:bg-sky-700 text-white text-sm font-medium px-4 py-2 rounded-lg">Simpan</button>
                <a href="{{ route('pelanggan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Batal</a>
            </div>
        </form>
    </div>
@endsection