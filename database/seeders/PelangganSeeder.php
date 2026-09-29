<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Budi Santoso', 'no_hp' => '081234567801', 'alamat' => 'Jl. Jenderal Sudirman No. 12, Balikpapan Kota'],
            ['nama' => 'Siti Rahmawati', 'no_hp' => '081234567802', 'alamat' => 'Jl. Ahmad Yani No. 45, Balikpapan Tengah'],
            ['nama' => 'Agus Prasetyo', 'no_hp' => '081234567803', 'alamat' => 'Perumahan Balikpapan Baru Blok C-7, Balikpapan Selatan, Kalimantan Timur, dekat pusat perbelanjaan dan sekolah'],
            ['nama' => 'Dewi Lestari', 'no_hp' => '081234567804', 'alamat' => 'Jl. MT Haryono No. 88, Balikpapan Selatan'],
            ['nama' => 'Rizky Ramadhan', 'no_hp' => '081234567805', 'alamat' => 'Jl. Soekarno Hatta KM 5 No. 21, Balikpapan Utara'],
            ['nama' => 'Putri Ayu Wulandari', 'no_hp' => '081234567806', 'alamat' => 'Jl. Pattimura Gg. Melati No. 3, Balikpapan Kota'],
            ['nama' => 'Hendra Wijaya', 'no_hp' => '081234567807', 'alamat' => 'Komplek Grand City Blok B-15, Balikpapan Kota'],
            ['nama' => 'Nur Aisyah', 'no_hp' => '081234567808', 'alamat' => 'Jl. Mayjen Sutoyo No. 9, Balikpapan Timur'],
            ['nama' => 'Fajar Nugroho', 'no_hp' => '081234567809', 'alamat' => 'Jl. Marsma R. Iswahyudi No. 30, Balikpapan Utara, Kalimantan Timur, sebelah minimarket dan apotek'],
            ['nama' => 'Maya Sari', 'no_hp' => '081234567810', 'alamat' => 'Jl. Letjen Suprapto Gg. Mawar No. 14, Balikpapan Kota'],
            ['nama' => 'Andi Kurniawan', 'no_hp' => '081234567811', 'alamat' => 'Jl. Indrakila No. 6, Balikpapan Tengah'],
            ['nama' => 'Lestari Handayani', 'no_hp' => '081234567812', 'alamat' => 'Jl. Gunung Malang No. 27, Balikpapan Tengah'],
            ['nama' => 'Dimas Aditya', 'no_hp' => '081234567813', 'alamat' => 'Perumahan Bukit Damai Indah Blok D-2, Balikpapan Selatan'],
            ['nama' => 'Rina Marlina', 'no_hp' => '081234567814', 'alamat' => 'Jl. Yos Sudarso No. 51, Balikpapan Kota'],
            ['nama' => 'Yusuf Hidayat', 'no_hp' => '081234567815', 'alamat' => 'Jl. Wolter Monginsidi No. 19, Balikpapan Selatan'],
        ];

        foreach ($data as $item) {
            Pelanggan::create($item);
        }
    }
}
