<x-layouts.app>

    <div class="max-w-4xl mx-auto">
        <a href="{{ route('pelanggan.index') }}" class="text-sm text-sky-600 hover:underline">Kembali ke daftar</a>
        <h1 class="mt-2 text-2xl font-bold text-slate-800">Edit Pelanggan</h1>
        <p class="text-sm text-slate-500 mb-6">Perbarui data pelanggan lalu simpan perubahan.</p>

        <form action="{{ route('pelanggan.update', $pelanggan) }}" method="POST" class="rounded-2xl bg-white shadow-sm border border-slate-200 overflow-hidden">
            @csrf
            @method('PUT')

            <div class="px-8 py-5 border-b border-slate-200 bg-slate-50">
                <h2 class="text-lg font-semibold text-slate-800">Informasi Pelanggan</h2>
                <p class="text-sm text-slate-500">Kolom bertanda <span class="text-red-500">*</span> wajib diisi.</p>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label for="nama" class="block text-sm font-semibold text-slate-700 mb-1.5">Nama <span class="text-red-500">*</span></label>
                    <input id="nama" type="text" name="nama" value="{{ old('nama', $pelanggan->nama) }}" placeholder="Contoh: Budi Santoso"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('nama') border-red-400 @enderror">
                    @error('nama') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="no_hp" class="block text-sm font-semibold text-slate-700 mb-1.5">No HP <span class="text-red-500">*</span></label>
                    <input id="no_hp" type="text" name="no_hp" value="{{ old('no_hp', $pelanggan->no_hp) }}" placeholder="Contoh: 081234567890"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('no_hp') border-red-400 @enderror">
                    @error('no_hp') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="md:col-span-2">
                    <label for="alamat" class="block text-sm font-semibold text-slate-700 mb-1.5">Alamat</label>
                    <textarea id="alamat" name="alamat" rows="4" placeholder="Tulis alamat lengkap pelanggan"
                        class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-800 placeholder-slate-400 shadow-sm transition focus:border-sky-500 focus:ring-4 focus:ring-sky-100 focus:outline-none @error('alamat') border-red-400 @enderror">{{ old('alamat', $pelanggan->alamat) }}</textarea>
                    @error('alamat') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

            </div>

            <div class="px-8 py-5 border-t border-slate-200 bg-slate-50 flex justify-end gap-3">
                <a href="{{ route('pelanggan.index') }}" class="inline-flex items-center justify-center rounded-lg border border-slate-300 bg-white px-6 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">Batal</a>
                <button type="submit" class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-amber-600">Update</button>
            </div>
        </form>
    </div>
    
</x-layouts.app>