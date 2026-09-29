<x-layouts.app>

    <div class="max-w-3xl mx-auto">
        <a href="{{ route('layanan.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800 mb-6">Detail Layanan</h1>

        <div class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-slate-800 break-words">{{ $layanan->nama_layanan }}</h2>
                    <p class="text-sm text-slate-500">Rp{{ number_format($layanan->harga, 0, ',', '.') }}</p>
                </div>
                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $layanan->kategori == 'Motor' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }}">
                    {{ $layanan->kategori }}
                </span>
            </div>

            <div class="p-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Nama Layanan</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $layanan->nama_layanan }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Kategori</p>
                    <p class="mt-1 text-slate-800">{{ $layanan->kategori }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Harga</p>
                    <p class="mt-1 text-slate-800 font-semibold">Rp{{ number_format($layanan->harga, 0, ',', '.') }}</p>
                </div>
                <div class="sm:col-span-2">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Deskripsi</p>
                    <p class="mt-1 text-slate-800 break-words whitespace-pre-line">{{ $layanan->deskripsi ?? '-' }}</p>
                </div>
            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('layanan.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Kembali</a>
                <a href="{{ route('layanan.edit', $layanan) }}" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Edit Data</a>
            </div>
        </div>
    </div>

</x-layouts.app>