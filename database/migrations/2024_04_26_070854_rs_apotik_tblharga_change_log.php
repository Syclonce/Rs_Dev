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
        //
      Schema::create('rs_apotik_tblharga_change_log', function (Blueprint $table) {
        $table->id();
        $table->integer('id_brg'); // Creates 'nama' column of type string
        $table->datetime('tgl_jam'); // Creates 'nama' column of type string
        $table->string('host_ip'); // Creates 'nama' column of type string
        $table->string('user_id'); // Creates 'nama' column of type string
        $table->string('file_harga_apotik_inf'); // Creates 'nama' column of type string
        $table->integer('harga_acuan'); // Creates 'nama' column of type string
        $table->integer('harga_sesudah'); // Creates 'nama' column of type string
        $table->string('remark'); // Creates 'nama' column of type string
        $table->string('module'); // Creates 'nama' column of type string
        $table->string('on_event'); // Creates 'nama' column of type string
        

        $table->timestamps(); // Creates 'created_at' and 'updated_at' columns for timestamps
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
