<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rswilayah extends Model
{
    use HasFactory;
    protected $table = 'rs_wilayah';
    protected $primaryKey = 'kode';
    protected $fillable = [
        'kode',
        'kode_kabupaten',
        'name',
    ];

    public function kabupaten()
    {
        return $this->belongsTo(rskabupaten::class, 'kode_kabupaten', 'kode');
    }
}
