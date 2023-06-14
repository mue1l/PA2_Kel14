<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekapan extends Model
{
    use HasFactory;

    protected $table = 'rekapanpendaftaran';
    protected $fillable = [
        'uang_diterima',
        'uang_kurang',
        'uang_lebih'
    ];
}
