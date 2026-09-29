<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam Kendaraan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col text-slate-800 bg-gradient-to-br from-slate-100 via-sky-50 to-slate-100">

    @php
        $menus = [
            'pelanggan' => 'Pelanggan',
            'kendaraan' => 'Kendaraan',
            'layanan' => 'Layanan',
            'karyawan' => 'Karyawan',
            'transaksi' => 'Transaksi',
        ];
    @endphp

    <nav class="bg-slate-900 shadow-lg sticky top-0 z-10">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-wrap items-center justify-between gap-3">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                <span class="text-lg font-bold tracking-wide text-white">Steam Kendaraan</span>
            </a>

            <div class="flex flex-wrap items-center gap-1">
                <a href="{{ route('dashboard') }}"
                    class="px-3 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs('dashboard') ? 'bg-sky-600 text-white' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }}">
                    Dashboard
                </a>
                @foreach ($menus as $route => $label)
                    <a href="{{ route($route . '.index') }}"
                        class="px-3 py-2 rounded-lg text-sm font-medium transition {{ request()->routeIs($route . '.*') ? 'bg-sky-600 text-white' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <main class="flex-1 w-full max-w-6xl mx-auto px-4 py-8">

        @if (session('success'))
            <div class="mb-6 rounded-lg bg-green-100 border border-green-300 text-green-800 px-4 py-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        {{ $slot }}

    </main>

    <footer class="border-t border-slate-200 bg-white">
        <div class="max-w-6xl mx-auto px-4 py-4 text-center text-sm text-slate-500">
            Steam Kendaraan - Sistem Manajemen Cuci Steam Motor dan Mobil
        </div>
    </footer>

</body>
</html>