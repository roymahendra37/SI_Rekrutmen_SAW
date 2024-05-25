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
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->id('id_alternatif');
            $table->foreignId('id_pelamar')->constrained('pelamars','id_pelamar')->onDelete('cascade');
            $table->integer('alternatif_kriteria1');
            $table->integer('alternatif_kriteria2');
            $table->integer('alternatif_kriteria3');
            $table->integer('alternatif_kriteria4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatifs');
    }
};
