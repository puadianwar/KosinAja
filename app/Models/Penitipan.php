<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    use HasFactory;
    
    protected $table = 'penitipan';

    protected $fillable = [
        'nama',
        'jumlah_barang',
        'tanggal_awal',
        'tanggal_akhir',
        'alamat',
    ];
}
