<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsemergency extends Model
{
    use HasFactory;
    protected $table = 'rs_emergency';
    protected $fillable = [
        'kode_emergency',
        'nama_emergency',
        'indexs',
    ];
}
