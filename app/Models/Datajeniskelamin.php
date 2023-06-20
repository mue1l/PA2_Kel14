<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datajeniskelamin extends Model
{
    use HasFactory;

    protected $table = 'databerdasarkanjeniskelamin';
    protected $fillable = [
        'jenis_kelamin',
        'jumlah',
    ];
}
