<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_pelanggan' => 'Budi Santoso', 'no_polisi' => 'KT 1234 AB', 'nama_layanan' => 'Cuci Steam Mobil Premium', 'total_bayar' => 80000, 'tanggal_transaksi' => '2026-09-01', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Siti Rahmawati', 'no_polisi' => 'KT 2345 CD', 'nama_layanan' => 'Cuci Steam Motor Reguler', 'total_bayar' => 25000, 'tanggal_transaksi' => '2026-09-02', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Agus Prasetyo', 'no_polisi' => 'KT 3456 EF', 'nama_layanan' => 'Cuci Steam Interior Mobil', 'total_bayar' => 100000, 'tanggal_transaksi' => '2026-09-03', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Dewi Lestari', 'no_polisi' => 'KT 4567 GH', 'nama_layanan' => 'Cuci Steam Motor Premium', 'total_bayar' => 40000, 'tanggal_transaksi' => '2026-09-05', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Rizky Ramadhan', 'no_polisi' => 'KT 5678 IJ', 'nama_layanan' => 'Cuci Steam Mobil Reguler', 'total_bayar' => 50000, 'tanggal_transaksi' => '2026-09-08', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Putri Ayu Wulandari', 'no_polisi' => 'KT 6789 KL', 'nama_layanan' => 'Paket Motor Lengkap', 'total_bayar' => 75000, 'tanggal_transaksi' => '2026-09-10', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Hendra Wijaya', 'no_polisi' => 'KT 7890 MN', 'nama_layanan' => 'Paket Mobil Lengkap', 'total_bayar' => 200000, 'tanggal_transaksi' => '2026-09-12', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Nur Aisyah', 'no_polisi' => 'KT 8901 OP', 'nama_layanan' => 'Cuci Steam Mesin Motor', 'total_bayar' => 35000, 'tanggal_transaksi' => '2026-09-15', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Fajar Nugroho', 'no_polisi' => 'KT 9012 QR', 'nama_layanan' => 'Poles Body Mobil', 'total_bayar' => 250000, 'tanggal_transaksi' => '2026-09-18', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Maya Sari', 'no_polisi' => 'KT 1122 ST', 'nama_layanan' => 'Semir Ban dan Body Motor', 'total_bayar' => 20000, 'tanggal_transaksi' => '2026-09-20', 'status' => 'Selesai'],
            ['nama_pelanggan' => 'Andi Kurniawan', 'no_polisi' => 'KT 2233 UV', 'nama_layanan' => 'Cuci Underwash Mobil', 'total_bayar' => 90000, 'tanggal_transaksi' => '2026-09-22', 'status' => 'Proses'],
            ['nama_pelanggan' => 'Lestari Handayani', 'no_polisi' => 'KT 3344 WX', 'nama_layanan' => 'Cuci Steam Motor Kilap', 'total_bayar' => 50000, 'tanggal_transaksi' => '2026-09-24', 'status' => 'Proses'],
            ['nama_pelanggan' => 'Dimas Aditya', 'no_polisi' => 'KT 4455 YZ', 'nama_layanan' => 'Salon Interior Mobil', 'total_bayar' => 150000, 'tanggal_transaksi' => '2026-09-26', 'status' => 'Menunggu'],
            ['nama_pelanggan' => 'Rina Marlina', 'no_polisi' => 'KT 5566 AA', 'nama_layanan' => 'Cuci Steam Motor Premium', 'total_bayar' => 40000, 'tanggal_transaksi' => '2026-09-27', 'status' => 'Menunggu'],
            ['nama_pelanggan' => 'Yusuf Hidayat', 'no_polisi' => 'KT 6677 BB', 'nama_layanan' => 'Coating Kaca Mobil', 'total_bayar' => 120000, 'tanggal_transaksi' => '2026-09-28', 'status' => 'Menunggu'],
        ];

        foreach ($data as $item) {
            Transaksi::create($item);
        }
    }
}
