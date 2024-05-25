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
        Schema::create('normalisasis', function (Blueprint $table) {
            $table->id('id_normalisasi');
            $table->foreignId('id_alternatif')->constrained('alternatifs','id_alternatif')->onDelete('cascade');
            $table->foreignId('id_pelamar')->constrained('pelamars','id_pelamar')->onDelete('cascade');
            $table->float('normalisasi_kriteria1');
            $table->float('normalisasi_kriteria2');
            $table->float('normalisasi_kriteria3');
            $table->float('normalisasi_kriteria4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normalisasis');
    }
};
