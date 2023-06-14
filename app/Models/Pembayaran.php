<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = "pembayaran";
    // public $timestamps = false;

    protected $fillable = [
        'nama_bank',
        'no_rekening',
        'avatar',
        'batas_pembayaran',
        'status'
    ];
}
