<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_pemilik' => 'Budi Santoso', 'jenis' => 'Mobil', 'merk' => 'Toyota Avanza', 'no_polisi' => 'KT 1234 AB', 'warna' => 'Hitam'],
            ['nama_pemilik' => 'Siti Rahmawati', 'jenis' => 'Motor', 'merk' => 'Honda Beat', 'no_polisi' => 'KT 2345 CD', 'warna' => 'Putih'],
            ['nama_pemilik' => 'Agus Prasetyo', 'jenis' => 'Mobil', 'merk' => 'Daihatsu Xenia', 'no_polisi' => 'KT 3456 EF', 'warna' => 'Silver'],
            ['nama_pemilik' => 'Dewi Lestari', 'jenis' => 'Motor', 'merk' => 'Yamaha NMAX', 'no_polisi' => 'KT 4567 GH', 'warna' => 'Abu-abu'],
            ['nama_pemilik' => 'Rizky Ramadhan', 'jenis' => 'Mobil', 'merk' => 'Honda Brio', 'no_polisi' => 'KT 5678 IJ', 'warna' => 'Merah'],
            ['nama_pemilik' => 'Putri Ayu Wulandari', 'jenis' => 'Motor', 'merk' => 'Honda Vario 160', 'no_polisi' => 'KT 6789 KL', 'warna' => 'Hitam'],
            ['nama_pemilik' => 'Hendra Wijaya', 'jenis' => 'Mobil', 'merk' => 'Mitsubishi Xpander', 'no_polisi' => 'KT 7890 MN', 'warna' => 'Putih'],
            ['nama_pemilik' => 'Nur Aisyah', 'jenis' => 'Motor', 'merk' => 'Yamaha Aerox', 'no_polisi' => 'KT 8901 OP', 'warna' => 'Biru'],
            ['nama_pemilik' => 'Fajar Nugroho', 'jenis' => 'Mobil', 'merk' => 'Toyota Fortuner', 'no_polisi' => 'KT 9012 QR', 'warna' => 'Hitam'],
            ['nama_pemilik' => 'Maya Sari', 'jenis' => 'Motor', 'merk' => 'Suzuki Address', 'no_polisi' => 'KT 1122 ST', 'warna' => 'Merah'],
            ['nama_pemilik' => 'Andi Kurniawan', 'jenis' => 'Mobil', 'merk' => 'Suzuki Ertiga', 'no_polisi' => 'KT 2233 UV', 'warna' => 'Silver'],
            ['nama_pemilik' => 'Lestari Handayani', 'jenis' => 'Motor', 'merk' => 'Honda Scoopy', 'no_polisi' => 'KT 3344 WX', 'warna' => 'Cokelat'],
            ['nama_pemilik' => 'Dimas Aditya', 'jenis' => 'Mobil', 'merk' => 'Toyota Innova', 'no_polisi' => 'KT 4455 YZ', 'warna' => 'Putih'],
            ['nama_pemilik' => 'Rina Marlina', 'jenis' => 'Motor', 'merk' => 'Kawasaki Ninja 250', 'no_polisi' => 'KT 5566 AA', 'warna' => 'Hijau'],
            ['nama_pemilik' => 'Yusuf Hidayat', 'jenis' => 'Mobil', 'merk' => 'Honda CR-V', 'no_polisi' => 'KT 6677 BB', 'warna' => 'Abu-abu'],
        ];

        foreach ($data as $item) {
            Kendaraan::create($item);
        }
    }
}
