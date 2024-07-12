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
            $table->id();
            $table->string('nama_siswa');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->unsignedBigInteger('class_id');
            $table->boolean('gender');
            $table->text('alamat');
            $table->string('no_telpon', 15);
            $table->string('no_kendaraan', 10);
            $table->string('nis', 20);
            $table->string('nisn', 20);
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
