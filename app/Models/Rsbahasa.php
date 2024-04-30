<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsbahasa extends Model
{
    use HasFactory;
    protected $table = 'rs_bahasa';
    protected $fillable = [
        'bahasa',
        'keterangan',
    ];
}
