<x-layouts.app>

    <div class="max-w-4xl mx-auto">
        <a href="{{ route('layanan.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800">Edit Layanan</h1>
        <p class="text-sm text-slate-500 mb-6">Perbarui data layanan lalu simpan perubahan.</p>

        <form action="{{ route('layanan.update', $layanan) }}" method="POST" class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">
            @csrf
            @method('PUT')

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50">
                <h2 class="text-lg font-semibold text-slate-800">Informasi Layanan</h2>
                <p class="text-sm text-slate-500">Kolom bertanda <span class="text-red-500">*</span> wajib diisi.</p>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="md:col-span-2">
                    <label for="nama_layanan" class="block text-sm font-semibold text-slate-700 mb-1.5">Nama Layanan <span class="text-red-500">*</span></label>
                    <input id="nama_layanan" type="text" name="nama_layanan" value="{{ old('nama_layanan', $layanan->nama_layanan) }}" placeholder="Contoh: Cuci Steam Motor Premium"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('nama_layanan') border-red-400 @enderror">
                    @error('nama_layanan') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="kategori" class="block text-sm font-semibold text-slate-700 mb-1.5">Kategori <span class="text-red-500">*</span></label>
                    <select id="kategori" name="kategori"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('kategori') border-red-400 @enderror">
                        <option value="Motor" {{ old('kategori', $layanan->kategori) == 'Motor' ? 'selected' : '' }}>Motor</option>
                        <option value="Mobil" {{ old('kategori', $layanan->kategori) == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                    </select>
                    @error('kategori') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="harga" class="block text-sm font-semibold text-slate-700 mb-1.5">Harga <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-sm font-medium text-slate-500">Rp</span>
                        <input id="harga" type="number" step="1" min="0" name="harga" value="{{ old('harga', (int) $layanan->harga) }}" placeholder="50000"
                            class="w-full rounded-lg border border-slate-300 bg-white pl-11 pr-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('harga') border-red-400 @enderror">
                    </div>
                    @error('harga') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="deskripsi" class="block text-sm font-semibold text-slate-700 mb-1.5">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Jelaskan isi paket layanan ini"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('deskripsi') border-red-400 @enderror">{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
                    @error('deskripsi') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('layanan.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Batal</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Update</button>
            </div>
        </form>
    </div>
</x-layouts.app>