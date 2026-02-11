<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pbdp', function (Blueprint $table) {
            $table->id('id_pbdp');
            $table->string('nama_jalur');
            $table->text('persyaratan_khusus');
            $table->date('tanggal_buka');
            $table->date('tanggal_tutup');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pbdp');
    }
};
