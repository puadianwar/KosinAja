<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packing extends Model
{
    use HasFactory;
    
    protected $table = 'packing';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
    ];
}
