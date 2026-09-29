<x-layouts.app>

    <div class="max-w-3xl mx-auto">
        <a href="{{ route('transaksi.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800 mb-6">Detail Transaksi</h1>

        <div class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">

            @php
                $badge = match($transaksi->status) {
                    'Menunggu' => 'bg-yellow-100 text-yellow-700',
                    'Proses' => 'bg-blue-100 text-blue-700',
                    'Selesai' => 'bg-green-100 text-green-700',
                };
            @endphp

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-slate-800 break-words">{{ $transaksi->nama_pelanggan }}</h2>
                    <p class="text-sm text-slate-500">{{ $transaksi->no_polisi }}</p>
                </div>
                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $badge }}">{{ $transaksi->status }}</span>
            </div>

            <div class="p-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Nama Pelanggan</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $transaksi->nama_pelanggan }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">No Polisi</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $transaksi->no_polisi }}</p>
                </div>
                <div class="sm:col-span-2">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Nama Layanan</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $transaksi->nama_layanan }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Total Bayar</p>
                    <p class="mt-1 text-slate-800 font-semibold">Rp{{ number_format($transaksi->total_bayar, 0, ',', '.') }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Tanggal Transaksi</p>
                    <p class="mt-1 text-slate-800">{{ \Carbon\Carbon::parse($transaksi->tanggal_transaksi)->translatedFormat('d F Y') }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Status</p>
                    <p class="mt-1"><span class="px-2 py-1 text-xs font-semibold rounded-full {{ $badge }}">{{ $transaksi->status }}</span></p>
                </div>
            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('transaksi.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Kembali</a>
                <a href="{{ route('transaksi.edit', $transaksi) }}" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Edit Data</a>
            </div>
        </div>
    </div>

</x-layouts.app>