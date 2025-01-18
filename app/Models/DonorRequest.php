<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hospital_id',
        'golonganDarah',
        'tanggal',
    ];
    public $timestamps = false;
}
