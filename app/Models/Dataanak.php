<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataanak extends Model
{
    use HasFactory;
    protected $table = 'dataanak';

    protected $fillable = [
        'tahun',
        'jenis_kelamin',
        'jumlah_anak'
    ];
}
