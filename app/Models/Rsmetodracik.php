<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsmetodracik extends Model
{
    use HasFactory;
    protected $table = 'rs_metodracik';
    protected $fillable = [
        'kode_racik',
        'nama_racik',
    ];
}
