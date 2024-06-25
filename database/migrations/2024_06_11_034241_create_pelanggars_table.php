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
        Schema::create('pelanggars', function (Blueprint $table) {
            $table->unsignedBigInteger("id_pelanggar");
            $table->string('nama_siswa');
            $table->date('tanggal');
            $table->string('class');
            $table->integer('kode_pelanggaran');
            $table->integer('point');
            $table->string('penanganan');
            $table->string('nama_petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggars');
    }
};
