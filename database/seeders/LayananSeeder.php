<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_layanan' => 'Cuci Steam Motor Reguler', 'kategori' => 'Motor', 'harga' => 25000, 'deskripsi' => 'Cuci steam body motor standar.'],
            ['nama_layanan' => 'Cuci Steam Motor Premium', 'kategori' => 'Motor', 'harga' => 40000, 'deskripsi' => 'Cuci steam body dan kolong motor dengan sabun khusus, termasuk pengeringan.'],
            ['nama_layanan' => 'Cuci Steam Mesin Motor', 'kategori' => 'Motor', 'harga' => 35000, 'deskripsi' => 'Pembersihan ruang mesin motor menggunakan uap bertekanan.'],
            ['nama_layanan' => 'Semir Ban dan Body Motor', 'kategori' => 'Motor', 'harga' => 20000, 'deskripsi' => 'Semir ban dan bagian plastik body agar tampak hitam mengkilap.'],
            ['nama_layanan' => 'Cuci Steam Motor Kilap', 'kategori' => 'Motor', 'harga' => 50000, 'deskripsi' => 'Cuci steam dilanjutkan pelapisan wax agar cat lebih mengkilap dan terlindungi.'],
            ['nama_layanan' => 'Paket Motor Lengkap', 'kategori' => 'Motor', 'harga' => 75000, 'deskripsi' => 'Paket lengkap: cuci steam body, mesin, kolong, semir ban, dan wax pelindung cat motor.'],
            ['nama_layanan' => 'Cuci Steam Mobil Reguler', 'kategori' => 'Mobil', 'harga' => 50000, 'deskripsi' => 'Cuci steam body mobil standar dan vakum karpet dasar.'],
            ['nama_layanan' => 'Cuci Steam Mobil Premium', 'kategori' => 'Mobil', 'harga' => 80000, 'deskripsi' => 'Cuci steam body, velg, dan kolong mobil dengan sabun khusus serta pengeringan menyeluruh.'],
            ['nama_layanan' => 'Cuci Steam Interior Mobil', 'kategori' => 'Mobil', 'harga' => 100000, 'deskripsi' => 'Pembersihan jok, dashboard, karpet, dan plafon bagian dalam mobil menggunakan uap.'],
            ['nama_layanan' => 'Cuci Steam Mesin Mobil', 'kategori' => 'Mobil', 'harga' => 70000, 'deskripsi' => 'Pembersihan ruang mesin mobil dari debu dan kerak oli.'],
            ['nama_layanan' => 'Poles Body Mobil', 'kategori' => 'Mobil', 'harga' => 250000, 'deskripsi' => 'Poles seluruh body mobil untuk menghilangkan baret halus dan mengembalikan kilap cat.'],
            ['nama_layanan' => 'Cuci Underwash Mobil', 'kategori' => 'Mobil', 'harga' => 90000, 'deskripsi' => 'Pembersihan bagian bawah mobil dari lumpur dan kotoran yang menempel.'],
            ['nama_layanan' => 'Salon Interior Mobil', 'kategori' => 'Mobil', 'harga' => 150000, 'deskripsi' => 'Perawatan lengkap interior: cuci steam jok, perawatan kulit, dan penghilang bau kabin.'],
            ['nama_layanan' => 'Paket Mobil Lengkap', 'kategori' => 'Mobil', 'harga' => 200000, 'deskripsi' => 'Paket lengkap: cuci steam body, interior, mesin, underwash, dan semir ban.'],
            ['nama_layanan' => 'Coating Kaca Mobil', 'kategori' => 'Mobil', 'harga' => 120000, 'deskripsi' => 'Pelapisan kaca mobil agar air hujan mudah menetes dan pandangan lebih jelas.'],
        ];

        foreach ($data as $item) {
            Layanan::create($item);
        }
    }
}
