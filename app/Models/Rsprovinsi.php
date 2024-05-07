<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsprovinsi extends Model
{
    use HasFactory;
    protected $table = 'rs_provinsi';
    protected $primaryKey = 'kode';
    protected $fillable = [
        'kode',
        'name',
    ];
}
