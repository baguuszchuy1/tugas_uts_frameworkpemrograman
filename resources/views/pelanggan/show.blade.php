<x-layouts.app>

    <div class="max-w-3xl mx-auto">
        <a href="{{ route('pelanggan.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800 mb-6">Detail Pelanggan</h1>

        <div class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50 flex items-center gap-4">
                {{-- <div class="flex h-14 w-14 items-center justify-center rounded-full bg-sky-100 text-sky-700 text-xl font-bold">
                    {{ strtoupper(substr($pelanggan->nama, 0, 1)) }}
                </div> --}}
                <div>
                    <h2 class="text-lg font-semibold text-slate-800">{{ $pelanggan->nama }}</h2>
                    <p class="text-sm text-slate-500">{{ $pelanggan->no_hp }}</p>
                </div>
            </div>

            <div class="p-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Nama</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $pelanggan->nama }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">No HP</p>
                    <p class="mt-1 text-slate-800 break-words">{{ $pelanggan->no_hp }}</p>
                </div>
                <div class="sm:col-span-2">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Alamat</p>
                    <p class="mt-1 text-slate-800 break-words whitespace-pre-line">{{ $pelanggan->alamat ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-400">Terdaftar Sejak</p>
                    <p class="mt-1 text-slate-800">{{ $pelanggan->created_at->translatedFormat('d F Y') }}</p>
                </div>
            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('pelanggan.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Kembali</a>
                <a href="{{ route('pelanggan.edit', $pelanggan) }}" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Edit Data</a>
            </div>
        </div>
    </div>
    
</x-layouts.app>