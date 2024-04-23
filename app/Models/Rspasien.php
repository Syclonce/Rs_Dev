<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rspasien extends Model
{
    use HasFactory;

    protected $table = 'rs_pasiens';

    protected $fillable = [
        'norm',
        'tgldaf',
        'nama',
        'sex',
        'tgllhr',
        'menikah',
        'agama',
        'ibukng',
        'goldar',
        'pkj',
        'pddk',
        'pjmn',
        'nokt',
        'kga',
        'nmakga',
        'noktp',
        'Alamat',
        'pvi',
        'kta',
        'kec',
        'des',
        'tpl',
        'email',
        'nowp',
    ];
}
