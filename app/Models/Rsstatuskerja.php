<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsstatuskerja extends Model
{
    use HasFactory;
    protected $table = 'rs_statsker';
    protected $fillable = [
        'stat_kerja',
        'ket_stats',
    ];
}
