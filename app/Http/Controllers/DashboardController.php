<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Kendaraan;
use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPelanggan = Pelanggan::count();
        $jumlahKendaraan = Kendaraan::count();
        $jumlahLayanan = Layanan::count();
        $jumlahKaryawan = Karyawan::count();
        $totalTransaksi = Transaksi::count();

        $menunggu = Transaksi::where('status', 'Menunggu')->count();
        $proses = Transaksi::where('status', 'Proses')->count();
        $selesai = Transaksi::where('status', 'Selesai')->count();

        $totalPendapatan = Transaksi::where('status', 'Selesai')->sum('total_bayar');
        $transaksiTerbaru = Transaksi::latest()->take(5)->get();

        return view('dashboard', compact(
            'jumlahPelanggan',
            'jumlahKendaraan',
            'jumlahLayanan',
            'jumlahKaryawan',
            'totalTransaksi',
            'menunggu',
            'proses',
            'selesai',
            'totalPendapatan',
            'transaksiTerbaru'
        ));
    }
}
