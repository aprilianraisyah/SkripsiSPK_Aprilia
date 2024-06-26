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
        Schema::create('subkriterias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kriteria_id');
            $table->foreign('kriteria_id')->references('id')->on('kriterias')->onDelete('cascade'); //foreign key
            $table->float('bobot');
            $table->float('nilai_subkriteria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subkriterias');
    }
};
