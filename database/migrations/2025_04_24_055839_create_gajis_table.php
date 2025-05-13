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
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('bulan');
            $table->decimal('gaji_pokok', 12, 2);
            $table->decimal('tunjangan', 12, 2)->nullable();
            $table->decimal('potongan', 12, 2)->nullable();
            $table->decimal('total_gaji', 12, 2);
            $table->string('status')->default('Belum Dibayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};
