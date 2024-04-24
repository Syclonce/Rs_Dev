<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsruangan extends Model
{
    use HasFactory;
    protected $table = 'rs_ruangan';
    protected $fillable = [
        'kode_ruangan',
        'nama_ruangan',
    ];
}
