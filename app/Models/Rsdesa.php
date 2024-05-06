<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rsdesa extends Model
{
    use HasFactory;
    protected $table = 'rs_desa';
    protected $primaryKey = 'kode';
    protected $fillable = [
        'kode',
        'kode_wilayah',
        'name',
    ];

    public function wilayah()
    {
        return $this->belongsTo(rswilayah::class, 'kode_wilayah', 'kode');
    }
}
