<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsjabatan extends Model
{
    use HasFactory;
    protected $table = 'rs_jabatan';
    protected $fillable = [
        'kode_jabatan',
        'nama_jabatan',
    ];
}
