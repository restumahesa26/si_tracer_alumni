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
        Schema::create('hapalan', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->foreign('nisn')->references('nisn')->on('alumni')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('juz_1', ['0','1'])->nullable()->default('0');
            $table->enum('juz_2', ['0','1'])->nullable()->default('0');
            $table->enum('juz_3', ['0','1'])->nullable()->default('0');
            $table->enum('juz_4', ['0','1'])->nullable()->default('0');
            $table->enum('juz_5', ['0','1'])->nullable()->default('0');
            $table->enum('juz_6', ['0','1'])->nullable()->default('0');
            $table->enum('juz_7', ['0','1'])->nullable()->default('0');
            $table->enum('juz_8', ['0','1'])->nullable()->default('0');
            $table->enum('juz_9', ['0','1'])->nullable()->default('0');
            $table->enum('juz_10', ['0','1'])->nullable()->default('0');
            $table->enum('juz_11', ['0','1'])->nullable()->default('0');
            $table->enum('juz_12', ['0','1'])->nullable()->default('0');
            $table->enum('juz_13', ['0','1'])->nullable()->default('0');
            $table->enum('juz_14', ['0','1'])->nullable()->default('0');
            $table->enum('juz_15', ['0','1'])->nullable()->default('0');
            $table->enum('juz_16', ['0','1'])->nullable()->default('0');
            $table->enum('juz_17', ['0','1'])->nullable()->default('0');
            $table->enum('juz_18', ['0','1'])->nullable()->default('0');
            $table->enum('juz_19', ['0','1'])->nullable()->default('0');
            $table->enum('juz_20', ['0','1'])->nullable()->default('0');
            $table->enum('juz_21', ['0','1'])->nullable()->default('0');
            $table->enum('juz_22', ['0','1'])->nullable()->default('0');
            $table->enum('juz_23', ['0','1'])->nullable()->default('0');
            $table->enum('juz_24', ['0','1'])->nullable()->default('0');
            $table->enum('juz_25', ['0','1'])->nullable()->default('0');
            $table->enum('juz_26', ['0','1'])->nullable()->default('0');
            $table->enum('juz_27', ['0','1'])->nullable()->default('0');
            $table->enum('juz_28', ['0','1'])->nullable()->default('0');
            $table->enum('juz_29', ['0','1'])->nullable()->default('0');
            $table->enum('juz_30', ['0','1'])->nullable()->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hapalan');
    }
};
