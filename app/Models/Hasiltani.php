<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilTani extends Model
{
    use HasFactory;

    protected $table = 'hasiltani';

    protected $fillable = [
        'nama',
        'avatar',
        'deskripsi',
    ];
}
