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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->unsignedBiginteger('bukus_id');
            $table->foreign('bukus_id')->references('id')->on('bukus');
            $table->unsignedBiginteger('anggotas_id');
            $table->foreign('anggotas_id')->references('id')->on('anggotas');
            $table->unsignedBiginteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
