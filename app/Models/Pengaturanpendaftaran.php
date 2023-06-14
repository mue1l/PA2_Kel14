<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaturanpendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pengaturanpendaftaran';
    protected $fillable = [
        'status_pendaftaran',
        'batas_tutup'
    ];
}
