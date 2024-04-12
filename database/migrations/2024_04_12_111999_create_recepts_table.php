<?php

use App\Models\Recept;
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
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategórias');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });
        Recept::create([
            'nev'=>"Vadas",
            'kat_id'=>"1",
            'kep_eleresi_ut'=>'valami',
            'leiras'=>'itt van a leiras'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
