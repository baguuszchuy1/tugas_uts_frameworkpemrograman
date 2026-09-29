<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'Ahmad Fauzi', 'jabatan' => 'Manajer', 'no_hp' => '082111000001', 'tanggal_masuk' => '2022-01-10'],
            ['nama' => 'Sri Wahyuni', 'jabatan' => 'Admin', 'no_hp' => '082111000002', 'tanggal_masuk' => '2022-03-15'],
            ['nama' => 'Bambang Susilo', 'jabatan' => 'Supervisor', 'no_hp' => '082111000003', 'tanggal_masuk' => '2022-05-02'],
            ['nama' => 'Lina Marlina', 'jabatan' => 'Kasir', 'no_hp' => '082111000004', 'tanggal_masuk' => '2022-07-20'],
            ['nama' => 'Eko Prasetyo', 'jabatan' => 'Operator Steam Motor', 'no_hp' => '082111000005', 'tanggal_masuk' => '2022-09-05'],
            ['nama' => 'Joko Widodo', 'jabatan' => 'Operator Steam Motor', 'no_hp' => '082111000006', 'tanggal_masuk' => '2023-01-12'],
            ['nama' => 'Rudi Hartono', 'jabatan' => 'Operator Steam Mobil', 'no_hp' => '082111000007', 'tanggal_masuk' => '2023-02-18'],
            ['nama' => 'Slamet Riyadi', 'jabatan' => 'Operator Steam Mobil', 'no_hp' => '082111000008', 'tanggal_masuk' => '2023-04-03'],
            ['nama' => 'Taufik Hidayat', 'jabatan' => 'Petugas Poles', 'no_hp' => '082111000009', 'tanggal_masuk' => '2023-06-14'],
            ['nama' => 'Wahyu Setiawan', 'jabatan' => 'Petugas Poles', 'no_hp' => '082111000010', 'tanggal_masuk' => '2023-08-21'],
            ['nama' => 'Dewi Anggraini', 'jabatan' => 'Petugas Interior', 'no_hp' => '082111000011', 'tanggal_masuk' => '2023-10-09'],
            ['nama' => 'Nita Purnama', 'jabatan' => 'Petugas Interior', 'no_hp' => '082111000012', 'tanggal_masuk' => '2024-01-08'],
            ['nama' => 'Hasan Basri', 'jabatan' => 'Petugas Kebersihan', 'no_hp' => '082111000013', 'tanggal_masuk' => '2024-03-25'],
            ['nama' => 'Irfan Maulana', 'jabatan' => 'Operator Steam Motor', 'no_hp' => '082111000014', 'tanggal_masuk' => '2024-06-17'],
            ['nama' => 'Yoga Pratama', 'jabatan' => 'Operator Steam Mobil', 'no_hp' => '082111000015', 'tanggal_masuk' => '2025-02-03'],
        ];

        foreach ($data as $item) {
            Karyawan::create($item);
        }
    }
}
