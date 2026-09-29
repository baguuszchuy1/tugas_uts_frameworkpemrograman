<x-layouts.app>

    <div class="flex items-center justify-between mb-4">
    <h1 class="text-2xl font-bold text-slate-800">Data Pelanggan</h1>
    <a href="{{ route('pelanggan.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white text-sm font-medium px-4 py-2 rounded-lg">
        + Tambah Pelanggan
    </a>
    
    </div>

    <form method="GET" action="{{ route('pelanggan.index') }}" class="mb-6 flex gap-2">
        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Cari nama atau no HP..."
            class="w-full max-w-sm rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none"
        >
        <button type="submit" class="bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-4 py-2 rounded-lg">Cari</button>
        @if($search)
            <a href="{{ route('pelanggan.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Reset</a>
        @endif
    </form>

    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-slate-100 text-slate-600 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">No HP</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($pelanggans as $pelanggan)
                    <tr>
                        <td class="px-4 py-3">{{ $pelanggan->nama }}</td>
                        <td class="px-4 py-3">{{ $pelanggan->no_hp }}</td>
                        <td class="px-4 py-3 max-w-xs">
                            <span class="block truncate" title="{{ $pelanggan->alamat }}">{{ $pelanggan->alamat ?? '-' }}</span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('pelanggan.show', $pelanggan) }}" class="bg-slate-600 hover:bg-slate-700 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Detail</a>
                                <a href="{{ route('pelanggan.edit', $pelanggan) }}" class="bg-amber-500 hover:bg-amber-600 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Edit</a>
                                <form action="{{ route('pelanggan.destroy', $pelanggan) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-400">Belum ada data pelanggan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $pelanggans->links() }}
    </div>

</x-layouts.app>