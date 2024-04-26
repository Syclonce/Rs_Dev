<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsbank extends Model
{
    use HasFactory;
    protected $table = 'rs_bank';
    protected $fillable = [
        'coa_bank',
        'nama',
    ];
}
