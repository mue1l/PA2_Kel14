<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayarandaftar extends Model
{
    use HasFactory;
    protected $table = "pembayaranpendaftaran";

    protected $fillable = [
        'nama_anak',
        'tanggal_lahir',
        'umur',
        'jenis_kelamin',
        'nama_orangtua',
        'alamat',
        'image',
        'batas_tutup',
        'status_pendaftaran',
        'status',
        'notif',
        'pemberitahuan',
        'user_id'
    ];
}
