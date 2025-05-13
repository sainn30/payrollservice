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
        Schema::create('datakaryawans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->unique(); // NIK (Nomor Induk Karyawan)
            $table->string('email')->unique();
            $table->string('no_hp')->nullable();
            $table->string('alamat')->nullable();   
            $table->string('jabatan'); // misal : manager, staff
            $table->date('tanggal_masuk');
            $table->integer('gaji_pokok');
            $table->enum('status', ['aktif', 'tidak aktif'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datakaryawans');
    }
};
