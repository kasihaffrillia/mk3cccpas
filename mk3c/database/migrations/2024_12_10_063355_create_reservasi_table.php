<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama pelanggan
            $table->date('tanggal'); // Tanggal reservasi
            $table->time('jam'); // Jam reservasi
            $table->enum('jenis_reservasi', ['dine_in', 'takeaway']); // Jenis reservasi
            $table->text('catatan')->nullable(); // Catatan tambahan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
