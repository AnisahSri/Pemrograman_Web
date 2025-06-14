<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nomor_hp', 'alamat'];

    public function kunjungans() {
        return $this->hasMany(Kunjungan::class);
    }
}
