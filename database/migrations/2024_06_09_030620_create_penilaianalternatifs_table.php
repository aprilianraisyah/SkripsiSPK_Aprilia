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
        Schema::create('penilaianalternatifs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alternatif_id')->constrained('alternatifs'); //foreign key
            $table->foreignId('kriteria_id')->constrained('kriterias'); //foreign key
        
            $table->float('nilai_kecocokan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaianalternatifs');
    }
};
