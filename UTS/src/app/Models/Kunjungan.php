<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggan_id',
        'tanggal_kunjungan',
        'makanan_dipesan',
        'total_bayar',
    ];

    protected $casts = [
        'makanan_dipesan' => 'array',
        'tanggal_kunjungan' => 'date',
    ];

    public function pelanggan() {
        return $this->belongsTo(Pelanggan::class);
    }
}
