<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsreiskokerja extends Model
{
    use HasFactory;
    protected $table = 'rs_resiko_kerja';
    protected $fillable = [
        'kode_kerja',
        'nama_resiko',
    ];
}
