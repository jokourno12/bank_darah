<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaRS',
        'alamat',
        'kontak',
        'stokA',
        'stokB',
        'stokAB',
        'stokO'
    ];
}
