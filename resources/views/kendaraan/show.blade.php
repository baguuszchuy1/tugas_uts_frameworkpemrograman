<x-layouts.app>

    <div class="max-w-3xl mx-auto">
        <a href="{{ route('kendaraan.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800 mb-6">Detail Kendaraan</h1>

        <div class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-slate-800">{{ $kendaraan->no_polisi }}</h2>
                    <p class="text-sm text-slate-500">{{ $kendaraan->merk }}</p>
                </div>
                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $kendaraan->jenis == 'Motor' ? 'bg-blue-100 text-blue-700' : 'bg-purple-100 text-purple-700' }}">
                    {{ $kendaraan->jenis }}
                </span>
            </div>

            <div class="p-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Nama Pemilik</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $kendaraan->nama_pemilik }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Jenis</p>
                    <p class="mt-1 text-slate-800">{{ $kendaraan->jenis }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Merk</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $kendaraan->merk }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">No Polisi</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $kendaraan->no_polisi }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Warna</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $kendaraan->warna ?? '-' }}</p>
                </div>
            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('kendaraan.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Kembali</a>
                <a href="{{ route('kendaraan.edit', $kendaraan) }}" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Edit Data</a>
            </div>
        </div>
    </div>

</x-layouts.app>