<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requestsurat extends Model
{
    use HasFactory;
    protected $table = 'requestsurat';
    protected $fillable = [
        'deskripsi',
        'tujuan',   
        'file_path',
        'status',
        'notif',
        'pemberitahuan'
    ];
}
