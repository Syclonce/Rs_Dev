<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsgrupjabatan extends Model
{
    use HasFactory;
    protected $table = 'rs_grupjabatan';
    protected $fillable = [
        'kode_jabatan',
        'nama_grup_jabatan',
    ];
}
