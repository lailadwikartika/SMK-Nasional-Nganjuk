<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kepala_sekolah', function (Blueprint $table) {
            $table->id('id_kepala_sekolah');
            $table->string('nama');
            $table->bigInteger('nip_nuptk')->nullable();
            $table->string('foto')->nullable();
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->text('sambutan')->nullable();

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
        
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kepala_sekolah');
    }
};