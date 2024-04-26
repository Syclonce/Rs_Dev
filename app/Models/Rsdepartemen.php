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
        'jenis_departemen',
        'inisial_poli',
        'bidang',
        'text_layar_antrian',
        'index_touchscreen_registrasi',
        'coa_unit',
        'coa_piutang',
        'coa_pendapatan',
        'coa_biaya',
        'coa_hpp',
        'coa_persediaan',
        'bpjs_maping',
        'casmix_grup',
        'kode_ihs',
    ];
}
