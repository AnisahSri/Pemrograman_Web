<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kunjungan;
use App\Models\Pelanggan;
use App\Models\Makanan;
use Illuminate\Support\Carbon;

class KunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggans = Pelanggan::all();
        $makanans = Makanan::all();

        foreach ($pelanggans as $pelanggan) {
            for ($i = 0; $i < rand(1, 3); $i++) {
                $makananDipilih = $makanans->random(rand(1, 3));
                $daftarMakanan = $makananDipilih->pluck('nama')->toArray();
                $total = $makananDipilih->sum('harga');

                Kunjungan::create([
                    'pelanggan_id' => $pelanggan->id,
                    'tanggal_kunjungan' => Carbon::now()->subDays(rand(0, 30)),
                    'makanan_dipesan' => $daftarMakanan,
                    'total_bayar' => $total,
                ]);
            }
        }
    }
}