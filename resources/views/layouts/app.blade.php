<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Steam Kendaraan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    <nav class="bg-slate-800 text-white shadow">
        <div class="max-w-6xl mx-auto px-4 py-3 flex flex-wrap items-center justify-between">
            <a href="{{ url('/') }}" class="text-lg font-bold tracking-wide">Steam Kendaraan</a>
            <div class="flex flex-wrap gap-4 text-sm mt-2 sm:mt-0">
                <a href="{{ route('pelanggan.index') }}" class="hover:text-sky-300">Pelanggan</a>
                <a href="{{ route('kendaraan.index') }}" class="hover:text-sky-300">Kendaraan</a>
                <a href="{{ route('layanan.index') }}" class="hover:text-sky-300">Layanan</a>
                <a href="{{ route('karyawan.index') }}" class="hover:text-sky-300">Karyawan</a>
                <a href="{{ route('transaksi.index') }}" class="hover:text-sky-300">Transaksi</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4 py-8">

        @if (session('success'))
            <div class="mb-4 rounded-lg bg-green-100 border border-green-300 text-green-800 px-4 py-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </main>

</body>
</html>