<x-layouts.app>

    {{-- Banner sambutan --}}
    <div class="relative overflow-hidden rounded-2xl bg-linear-to-br from-sky-600 via-sky-700 to-indigo-800 p-8 shadow-lg mb-8">
        <div class="absolute -right-10 -top-10 h-48 w-48 rounded-full bg-white/10"></div>
        <div class="absolute right-24 -bottom-16 h-40 w-40 rounded-full bg-white/10"></div>

        <div class="relative">
            <p class="text-sky-100 text-sm">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
            <h1 class="mt-1 text-3xl font-bold text-white">Selamat Datang di Steam Kendaraan</h1>
            <p class="mt-2 max-w-xl text-sky-100">
                Kelola pelanggan, kendaraan, layanan, karyawan, dan transaksi cuci steam dalam satu tempat.
            </p>

            <div class="mt-6 flex flex-wrap gap-3">
                <a href="{{ route('transaksi.create') }}" class="bg-white text-sky-700 hover:bg-sky-50 text-sm font-semibold px-5 py-2.5 rounded-lg shadow">
                    + Transaksi Baru
                </a>
                <a href="{{ route('pelanggan.create') }}" class="bg-sky-500/40 hover:bg-sky-500/60 text-white text-sm font-semibold px-5 py-2.5 rounded-lg border border-white/30">
                    + Pelanggan Baru
                </a>
            </div>
        </div>
    </div>

    {{-- Kartu statistik --}}
    <div class="grid grid-cols-2 lg:grid-cols-5 gap-4 mb-8">

        <a href="{{ route('pelanggan.index') }}" class="group relative overflow-hidden rounded-xl bg-white p-5 shadow-sm border border-slate-100 hover:shadow-md transition">
            <div class="absolute right-0 top-0 h-full w-1.5 bg-sky-500"></div>
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Pelanggan</p>
            <p class="mt-2 text-3xl font-bold text-slate-800">{{ $jumlahPelanggan }}</p>
            <p class="mt-1 text-xs text-sky-600 group-hover:underline">Lihat data</p>
        </a>

        <a href="{{ route('kendaraan.index') }}" class="group relative overflow-hidden rounded-xl bg-white p-5 shadow-sm border border-slate-100 hover:shadow-md transition">
            <div class="absolute right-0 top-0 h-full w-1.5 bg-indigo-500"></div>
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Kendaraan</p>
            <p class="mt-2 text-3xl font-bold text-slate-800">{{ $jumlahKendaraan }}</p>
            <p class="mt-1 text-xs text-indigo-600 group-hover:underline">Lihat data</p>
        </a>

        <a href="{{ route('layanan.index') }}" class="group relative overflow-hidden rounded-xl bg-white p-5 shadow-sm border border-slate-100 hover:shadow-md transition">
            <div class="absolute right-0 top-0 h-full w-1.5 bg-emerald-500"></div>
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Layanan</p>
            <p class="mt-2 text-3xl font-bold text-slate-800">{{ $jumlahLayanan }}</p>
            <p class="mt-1 text-xs text-emerald-600 group-hover:underline">Lihat data</p>
        </a>

        <a href="{{ route('karyawan.index') }}" class="group relative overflow-hidden rounded-xl bg-white p-5 shadow-sm border border-slate-100 hover:shadow-md transition">
            <div class="absolute right-0 top-0 h-full w-1.5 bg-amber-500"></div>
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Karyawan</p>
            <p class="mt-2 text-3xl font-bold text-slate-800">{{ $jumlahKaryawan }}</p>
            <p class="mt-1 text-xs text-amber-600 group-hover:underline">Lihat data</p>
        </a>

        <a href="{{ route('transaksi.index') }}" class="group relative overflow-hidden rounded-xl bg-white p-5 shadow-sm border border-slate-100 hover:shadow-md transition col-span-2 lg:col-span-1">
            <div class="absolute right-0 top-0 h-full w-1.5 bg-rose-500"></div>
            <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Transaksi</p>
            <p class="mt-2 text-3xl font-bold text-slate-800">{{ $totalTransaksi }}</p>
            <p class="mt-1 text-xs text-rose-600 group-hover:underline">Lihat data</p>
        </a>

    </div>

    {{-- Baris bawah: transaksi terbaru dan ringkasan --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Transaksi terbaru --}}
        <div class="lg:col-span-2 rounded-xl bg-white shadow-sm border border-slate-100">
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100">
                <h2 class="text-lg font-semibold text-slate-800">Transaksi Terbaru</h2>
                <a href="{{ route('transaksi.index') }}" class="text-sm text-sky-600 hover:underline">Lihat semua</a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-slate-50 text-slate-500 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3">Pelanggan</th>
                            <th class="px-6 py-3">Layanan</th>
                            <th class="px-6 py-3">Total</th>
                            <th class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse ($transaksiTerbaru as $transaksi)
                            <tr class="hover:bg-slate-50">
                                <td class="px-6 py-3">
                                    <p class="font-medium text-slate-800">{{ $transaksi->nama_pelanggan }}</p>
                                    <p class="text-xs text-slate-500">{{ $transaksi->no_polisi }}</p>
                                </td>
                                <td class="px-6 py-3 max-w-40">
                                    <span class="block truncate">{{ $transaksi->nama_layanan }}</span>
                                </td>
                                <td class="px-6 py-3">Rp{{ number_format($transaksi->total_bayar, 0, ',', '.') }}</td>
                                <td class="px-6 py-3">
                                    @php
                                        $badge = match($transaksi->status) {
                                            'Menunggu' => 'bg-yellow-100 text-yellow-700',
                                            'Proses' => 'bg-blue-100 text-blue-700',
                                            'Selesai' => 'bg-green-100 text-green-700',
                                        };
                                    @endphp
                                    <span class="px-2 py-1 text-xs rounded-full {{ $badge }}">{{ $transaksi->status }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-8 text-center text-slate-400">Belum ada transaksi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Ringkasan pendapatan dan status --}}
        <div class="space-y-6">

            <div class="rounded-xl bg-linear-to-br from-emerald-500 to-teal-600 p-6 shadow-sm text-white">
                <p class="text-sm text-emerald-100">Total Pendapatan (Selesai)</p>
                <p class="mt-2 text-3xl font-bold">Rp{{ number_format($totalPendapatan, 0, ',', '.') }}</p>
                <p class="mt-1 text-xs text-emerald-100">Dihitung dari transaksi berstatus Selesai</p>
            </div>

            <div class="rounded-xl bg-white p-6 shadow-sm border border-slate-100">
                <h2 class="text-lg font-semibold text-slate-800 mb-4">Status Transaksi</h2>

                @php
                    $statusList = [
                        ['label' => 'Menunggu', 'jumlah' => $menunggu, 'warna' => 'bg-yellow-400'],
                        ['label' => 'Proses', 'jumlah' => $proses, 'warna' => 'bg-blue-500'],
                        ['label' => 'Selesai', 'jumlah' => $selesai, 'warna' => 'bg-green-500'],
                    ];
                @endphp

                <div class="space-y-4">
                    @foreach ($statusList as $item)
                        @php
                            $persen = $totalTransaksi > 0 ? round(($item['jumlah'] / $totalTransaksi) * 100) : 0;
                        @endphp
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-slate-600">{{ $item['label'] }}</span>
                                <span class="font-medium text-slate-800">{{ $item['jumlah'] }}</span>
                            </div>
                            <div class="h-2 w-full rounded-full bg-slate-100">
                                <div class="h-2 rounded-full {{ $item['warna'] }}" style="width: {{ $persen }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</x-layouts.app>