<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'nama' => 'Andi',
            'nomor_hp' => '08123456789',
            'alamat' => 'Jl. Mawar No. 10',
        ]);

        Pelanggan::create([
            'nama' => 'Budi',
            'nomor_hp' => '08234567890',
            'alamat' => 'Jl. Melati No. 22',
        ]);
    }
}
