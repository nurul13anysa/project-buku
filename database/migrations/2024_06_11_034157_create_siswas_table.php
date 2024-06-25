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
        Schema::create('siswas', function (Blueprint $table) {
            $table->unsignedBigInteger("id_siswa");
            $table->string('nama_siswa');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('class');
            $table->boolean('gender');
            $table->string('alamat');
            $table->integer('no_telpon');
            $table->integer('no_kendaraan');
            $table->integer('nis');
            $table->integer('nisn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
