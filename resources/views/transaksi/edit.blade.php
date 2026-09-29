<x-layouts.app>

    <div class="max-w-4xl mx-auto">
        <a href="{{ route('transaksi.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800">Edit Transaksi</h1>
        <p class="text-sm text-slate-500 mb-6">Perbarui data transaksi lalu simpan perubahan.</p>

        <form action="{{ route('transaksi.update', $transaksi) }}" method="POST" class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">
            @csrf
            @method('PUT')

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50">
                <h2 class="text-lg font-semibold text-slate-800">Informasi Transaksi</h2>
                <p class="text-sm text-slate-500">Kolom bertanda <span class="text-red-500">*</span> wajib diisi.</p>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="nama_pelanggan" class="block text-sm font-semibold text-slate-700 mb-1.5">Nama Pelanggan <span class="text-red-500">*</span></label>
                    <input id="nama_pelanggan" type="text" name="nama_pelanggan" value="{{ old('nama_pelanggan', $transaksi->nama_pelanggan) }}" placeholder="Contoh: Budi Santoso"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('nama_pelanggan') border-red-400 @enderror">
                    @error('nama_pelanggan') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="no_polisi" class="block text-sm font-semibold text-slate-700 mb-1.5">No Polisi <span class="text-red-500">*</span></label>
                    <input id="no_polisi" type="text" name="no_polisi" value="{{ old('no_polisi', $transaksi->no_polisi) }}" placeholder="Contoh: KT 1234 AB"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('no_polisi') border-red-400 @enderror">
                    @error('no_polisi') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="nama_layanan" class="block text-sm font-semibold text-slate-700 mb-1.5">Nama Layanan <span class="text-red-500">*</span></label>
                    <input id="nama_layanan" type="text" name="nama_layanan" value="{{ old('nama_layanan', $transaksi->nama_layanan) }}" placeholder="Contoh: Cuci Steam Mobil Premium"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('nama_layanan') border-red-400 @enderror">
                    @error('nama_layanan') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="total_bayar" class="block text-sm font-semibold text-slate-700 mb-1.5">Total Bayar <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-sm font-medium text-slate-500">Rp</span>
                        <input id="total_bayar" type="number" step="1" min="0" name="total_bayar" value="{{ old('total_bayar', (int) $transaksi->total_bayar) }}" placeholder="80000"
                            class="w-full rounded-lg border border-slate-300 bg-white pl-11 pr-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('total_bayar') border-red-400 @enderror">
                    </div>
                    @error('total_bayar') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="tanggal_transaksi" class="block text-sm font-semibold text-slate-700 mb-1.5">Tanggal Transaksi <span class="text-red-500">*</span></label>
                    <input id="tanggal_transaksi" type="date" name="tanggal_transaksi" value="{{ old('tanggal_transaksi', \Carbon\Carbon::parse($transaksi->tanggal_transaksi)->format('Y-m-d')) }}"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('tanggal_transaksi') border-red-400 @enderror">
                    @error('tanggal_transaksi') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="status" class="block text-sm font-semibold text-slate-700 mb-1.5">Status <span class="text-red-500">*</span></label>
                    <select id="status" name="status"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('status') border-red-400 @enderror">
                        <option value="Menunggu" {{ old('status', $transaksi->status) == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                        <option value="Proses" {{ old('status', $transaksi->status) == 'Proses' ? 'selected' : '' }}>Proses</option>
                        <option value="Selesai" {{ old('status', $transaksi->status) == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    </select>
                    @error('status') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('transaksi.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Batal</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Update</button>
            </div>
        </form>
    </div>

</x-layouts.app>