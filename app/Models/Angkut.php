<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkut extends Model
{
    use HasFactory;
    
    protected $table = 'angkuts';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
    ];
}
