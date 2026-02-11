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
    Schema::create('bkk', function (Blueprint $table) {
        $table->id('id_bkk');
        $table->string('judul_lowongan');
        $table->string('nama_perusahaan');
        $table->text('persyaratan');
        $table->date('tanggal_dibuka');
        $table->date('tanggal_ditutup');
        $table->string('foto')->nullable();

        $table->unsignedBigInteger('id_user');
        $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bkk');
    }
};
