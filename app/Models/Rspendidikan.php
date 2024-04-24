<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rspendidikan extends Model
{
    use HasFactory;
    protected $table = 'rs_pendidikan';
    protected $fillable = [
        'kode_pendidikan',
        'nama_pendidikan',
    ];
}
