<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rskabupaten extends Model
{
    use HasFactory;
    protected $table = 'rs_kabupaten';
    protected $primaryKey = 'kode';
    protected $fillable = [
        'kode',
        'kode_provinsi',
        'name',
    ];

    public function provinsi()
    {
        return $this->belongsTo(rsprovinsi::class, 'kode_provinsi', 'kode');
    }
}
