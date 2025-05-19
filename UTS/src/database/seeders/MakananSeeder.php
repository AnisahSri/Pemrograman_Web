<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Makanan;

class MakananSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Nasi Goreng', 'harga' => 15000, 'deskripsi' => 'Nasi goreng spesial'],
            ['nama' => 'Ayam Geprek', 'harga' => 18000, 'deskripsi' => 'Ayam geprek pedas'],
            ['nama' => 'Sate Ayam', 'harga' => 20000, 'deskripsi' => 'Sate ayam dengan bumbu kacang'],
            ['nama' => 'Mie Goreng', 'harga' => 13000, 'deskripsi' => 'Mie goreng ala warung'],
        ];

        foreach ($data as $item) {
            Makanan::firstOrCreate(
                ['nama' => $item['nama']], // Hindari duplikat berdasarkan nama
                ['harga' => $item['harga'], 'deskripsi' => $item['deskripsi']]
            );
        }
    }
}
