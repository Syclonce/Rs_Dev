<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsbidang extends Model
{
    use HasFactory;
    protected $table = 'rs_bidang';
    protected $fillable = [
        'nama',
    ];
}
