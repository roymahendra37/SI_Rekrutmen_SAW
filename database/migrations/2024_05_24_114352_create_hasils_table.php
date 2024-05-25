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
        Schema::create('hasils', function (Blueprint $table) {
            $table->id('id_hasil');
            $table->foreignId('id_normalisasi')->constrained('normalisasis','id_normalisasi')->onDelete('cascade');
            $table->foreignId('id_pelamar')->constrained('pelamars','id_pelamar')->onDelete('cascade');
            $table->float('hasil_kriteria1');
            $table->float('hasil_kriteria2');
            $table->float('hasil_kriteria3');
            $table->float('hasil_kriteria4');
            $table->float('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasils');
    }
};
