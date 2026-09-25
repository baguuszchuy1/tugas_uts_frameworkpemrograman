@extends('layouts.app')

@section('title', 'Edit Kendaraan')

@section('content')
    <h1 class="text-2xl font-bold text-slate-800 mb-6">Edit Kendaraan</h1>

    <div class="bg-white rounded-xl shadow p-8 max-w-2xl">
        <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" value="{{ old('nama_pemilik', $kendaraan->nama_pemilik) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('nama_pemilik') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jenis</label>
                <select name="jenis" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                    <option value="Motor" {{ old('jenis', $kendaraan->jenis) == 'Motor' ? 'selected' : '' }}>Motor</option>
                    <option value="Mobil" {{ old('jenis', $kendaraan->jenis) == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                </select>
                @error('jenis') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Merk</label>
                <input type="text" name="merk" value="{{ old('merk', $kendaraan->merk) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('merk') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">No Polisi</label>
                <input type="text" name="no_polisi" value="{{ old('no_polisi', $kendaraan->no_polisi) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('no_polisi') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Warna</label>
                <input type="text" name="warna" value="{{ old('warna', $kendaraan->warna) }}" class="w-full rounded-lg border border-gray-300 px-3 py-2 text-slate-800 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none">
                @error('warna') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-2">
                <button type="submit" class="bg-amber-600 hover:bg-amber-700 text-white text-sm font-medium px-4 py-2 rounded-lg">Update</button>
                <a href="{{ route('kendaraan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Batal</a>
            </div>
        </form>
    </div>
@endsection