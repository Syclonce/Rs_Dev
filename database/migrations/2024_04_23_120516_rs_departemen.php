<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rs_departemen', function (Blueprint $table) {
            $table->id(); // Creates auto-incrementing primary key 'id'
            $table->string('nama'); // Creates 'nama' column of type string
            $table->string('jenis_departemen'); // Creates 'nama' column of type string
            $table->string('inisial_poli'); // Creates 'nama' column of type string
            $table->string('bidang'); // Creates 'nama' column of type string
            $table->string('text_layar_antrian'); // Creates 'nama' column of type string
            $table->string('index_touchscreen_registrasi'); // Creates 'nama' column of type string
            $table->string('coa_unit'); // Creates 'nama' column of type string
            $table->string('coa_piutang'); // Creates 'nama' column of type string
            $table->string('coa_pendapatan'); // Creates 'nama' column of type string
            $table->string('coa_biaya'); // Creates 'nama' column of type string
            $table->string('coa_hpp'); // Creates 'nama' column of type string
            $table->string('coa_persediaan'); // Creates 'nama' column of type string
            $table->string('bpjs_maping'); // Creates 'nama' column of type string
            $table->string('casmix_grup'); // Creates 'nama' column of type string
            $table->string('kode_ihs'); // Creates 'nama' column of type string
            $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('rs_departemen');
    }
};
