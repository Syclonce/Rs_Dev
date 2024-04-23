<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsdepartemen extends Model
{
    use HasFactory;
    protected $table = 'rs_departemen';
    protected $fillable = [
        'nama',
    ];
}
