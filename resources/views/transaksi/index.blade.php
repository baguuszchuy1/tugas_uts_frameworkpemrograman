<x-layouts.app>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-slate-800">Data Transaksi</h1>
        <a href="{{ route('transaksi.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white text-sm font-medium px-4 py-2 rounded-lg">
            + Tambah Transaksi
        </a>
    </div>

    <form method="GET" action="{{ route('transaksi.index') }}" class="mb-6 flex gap-2">
        <input
            type="text"
            name="search"
            value="{{ $search }}"
            placeholder="Cari pelanggan, no polisi, layanan, atau status..."
            class="w-full max-w-sm rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-sky-500 focus:ring-2 focus:ring-sky-200 focus:outline-none"
        >
        <button type="submit" class="bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-4 py-2 rounded-lg">Cari</button>
        @if($search)
            <a href="{{ route('transaksi.index') }}" class="bg-gray-200 hover:bg-gray-300 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg">Reset</a>
        @endif
    </form>

    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="min-w-full text-sm text-left">
            <thead class="bg-slate-100 text-slate-600 uppercase text-xs">
                <tr>
                    <th class="px-4 py-3">Pelanggan</th>
                    <th class="px-4 py-3">No Polisi</th>
                    <th class="px-4 py-3">Layanan</th>
                    <th class="px-4 py-3">Total Bayar</th>
                    <th class="px-4 py-3">Tanggal</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($transaksis as $transaksi)
                    <tr>
                        <td class="px-4 py-3">{{ $transaksi->nama_pelanggan }}</td>
                        <td class="px-4 py-3">{{ $transaksi->no_polisi }}</td>
                        <td class="px-4 py-3">{{ $transaksi->nama_layanan }}</td>
                        <td class="px-4 py-3">Rp{{ number_format($transaksi->total_bayar, 0, ',', '.') }}</td>
                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($transaksi->tanggal_transaksi)->format('d-m-Y') }}</td>
                        <td class="px-4 py-3">
                            @php
                                $badge = match($transaksi->status) {
                                    'Menunggu' => 'bg-yellow-100 text-yellow-700',
                                    'Proses' => 'bg-blue-100 text-blue-700',
                                    'Selesai' => 'bg-green-100 text-green-700',
                                };
                            @endphp
                            <span class="px-2 py-1 text-xs rounded-full {{ $badge }}">{{ $transaksi->status }}</span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex justify-end gap-2">
                                <a href="{{ route('transaksi.show', $transaksi) }}" class="bg-slate-600 hover:bg-slate-700 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Detail</a>
                                <a href="{{ route('transaksi.edit', $transaksi) }}" class="bg-amber-500 hover:bg-amber-600 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Edit</a>
                                <form action="{{ route('transaksi.destroy', $transaksi) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-xs font-medium px-3 py-1.5 rounded-lg">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-6 text-center text-gray-400">Belum ada data transaksi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $transaksis->links() }}
    </div>

</x-layouts.app>