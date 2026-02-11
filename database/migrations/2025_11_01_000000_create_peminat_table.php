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
        Schema::create('peminat', function (Blueprint $table) {
            $table->id('id_peminat');
            $table->string('nama_lengkap');
            $table->string('asal_sekolah');
            $table->text('alamat');
            $table->string('no_hp');
            $table->timestamps();

            $table->unsignedBigInteger('id_pbdp')->nullable();
            $table->foreign('id_pbdp')->references('id_pbdp')->on('pbdp')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminat');
    }
};