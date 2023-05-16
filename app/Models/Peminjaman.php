<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    public $timestamps = false;

    protected $fillable = [
        'namaalat',
        'jumlah',
        'tanggal_peminjaman',
        'tanggal_pemulangan',
        'status',
        'notif',
        'pemberitahuan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
