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
        Schema::create('perguruan_tinggi', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->foreign('nisn')->references('nisn')->on('alumni')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama_universitas');
            $table->string('nama_program_studi');
            $table->string('jenis_universitas');
            $table->string('jalur_seleksi');
            $table->string('tahun_masuk');
            $table->string('tahun_lulus')->nullable();
            $table->decimal('ip_1',3,2)->nullable();
            $table->decimal('ip_2',3,2)->nullable();
            $table->decimal('ip_3',3,2)->nullable();
            $table->decimal('ip_4',3,2)->nullable();
            $table->decimal('ip_5',3,2)->nullable();
            $table->decimal('ip_6',3,2)->nullable();
            $table->decimal('ip_7',3,2)->nullable();
            $table->decimal('ip_8',3,2)->nullable();
            $table->decimal('ip_9',3,2)->nullable();
            $table->decimal('ip_10',3,2)->nullable();
            $table->decimal('ip_11',3,2)->nullable();
            $table->decimal('ip_12',3,2)->nullable();
            $table->decimal('ip_13',3,2)->nullable();
            $table->decimal('ip_14',3,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perguruan_tinggi');
    }
};
