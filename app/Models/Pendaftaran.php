<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    protected $fillable = [
        'nama_anak',
        'tanggal_lahir',
        'umur',
        'jenis_kelamin',
        'nama_orangtua',
        'alamat',
        'avatar',
        'batas_tutup',
        'status_pendaftaran',
        'status',
        'notif',
        'pemberitahuan'
    ];
}
