@extends('layouts.app')

@section('title', 'Data Layanan')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Data Layanan</h1>
        <a href="{{ route('layanan.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white text-sm font-medium px-4 py-2 rounded-lg">
            + Tambah Layanan
        </a>
    </div>

    <form method="GET" action="{{ route('layanan.index') }}" class="mb-6 flex gap-2">
        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Cari nama layanan atau kategori..."
            class="w-full max-w-sm rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none"
        >
        <button type="submit" class="bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-4 py-2 rounded-lg">Cari</button>
        @if($search)
            <a href="{{ route('layanan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Reset</a>
        @endif
    </form>

    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-slate-100 text-slate-600 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">Nama Layanan</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Harga</th>
                    <th class="px-4 py-3">Deskripsi</th>
                    <th class="px-4 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($layanans as $layanan)
                    <tr>
                        <td class="px-4 py-3">{{ $layanan->nama_layanan }}</td>
                        <td class="px-4 py-3">{{ $layanan->kategori }}</td>
                        <td class="px-4 py-3">Rp{{ number_format($layanan->harga, 0, ',', '.') }}</td>
                        <td class="px-4 py-3 max-w-xs">
                            <span class="block truncate" title="{{ $layanan->deskripsi }}">{{ $layanan->deskripsi ?? '-' }}</span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('layanan.show', $layanan) }}" class="bg-slate-600 hover:bg-slate-700 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Detail</a>
                                <a href="{{ route('layanan.edit', $layanan) }}" class="bg-amber-500 hover:bg-amber-600 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Edit</a>
                                <form action="{{ route('layanan.destroy', $layanan) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-gray-400">Belum ada data layanan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $layanans->links() }}
    </div>
@endsection