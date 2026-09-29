<x-layouts.app>

    <div class="max-w-4xl mx-auto">
        <a href="{{ route('kendaraan.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800">Edit Kendaraan</h1>
        <p class="text-sm text-slate-500 mb-6">Perbarui data kendaraan lalu simpan perubahan.</p>

        <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST" class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">
            @csrf
            @method('PUT')

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50">
                <h2 class="text-lg font-semibold text-slate-800">Informasi Kendaraan</h2>
                <p class="text-sm text-slate-500">Kolom bertanda <span class="text-red-500">*</span> wajib diisi.</p>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="nama_pemilik" class="block text-sm font-semibold text-slate-700 mb-1.5">Nama Pemilik <span class="text-red-500">*</span></label>
                    <input id="nama_pemilik" type="text" name="nama_pemilik" value="{{ old('nama_pemilik', $kendaraan->nama_pemilik) }}" placeholder="Contoh: Budi Santoso"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('nama_pemilik') border-red-400 @enderror">
                    @error('nama_pemilik') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="jenis" class="block text-sm font-semibold text-slate-700 mb-1.5">Jenis <span class="text-red-500">*</span></label>
                    <select id="jenis" name="jenis"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('jenis') border-red-400 @enderror">
                        <option value="Motor" {{ old('jenis', $kendaraan->jenis) == 'Motor' ? 'selected' : '' }}>Motor</option>
                        <option value="Mobil" {{ old('jenis', $kendaraan->jenis) == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                    </select>
                    @error('jenis') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="merk" class="block text-sm font-semibold text-slate-700 mb-1.5">Merk <span class="text-red-500">*</span></label>
                    <input id="merk" type="text" name="merk" value="{{ old('merk', $kendaraan->merk) }}" placeholder="Contoh: Honda Beat"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('merk') border-red-400 @enderror">
                    @error('merk') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="no_polisi" class="block text-sm font-semibold text-slate-700 mb-1.5">No Polisi <span class="text-red-500">*</span></label>
                    <input id="no_polisi" type="text" name="no_polisi" value="{{ old('no_polisi', $kendaraan->no_polisi) }}" placeholder="Contoh: KT 1234 AB"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('no_polisi') border-red-400 @enderror">
                    @error('no_polisi') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="warna" class="block text-sm font-semibold text-slate-700 mb-1.5">Warna</label>
                    <input id="warna" type="text" name="warna" value="{{ old('warna', $kendaraan->warna) }}" placeholder="Contoh: Hitam"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('warna') border-red-400 @enderror">
                    @error('warna') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('kendaraan.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Batal</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Update</button>
            </div>
        </form>
    </div>

</x-layouts.app>