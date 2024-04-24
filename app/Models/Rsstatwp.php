<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsstatwp extends Model
{
    use HasFactory;
    protected $table = 'rs_statwp';
    protected $fillable = [
        'status',
        'ket',
    ];
}
