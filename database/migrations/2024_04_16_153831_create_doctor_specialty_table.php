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
        Schema::create('doctor_specialty', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();  
              $table->foreignId('specialty_id');
              $table->foreignId('doctor_id');
              
              $table->foreign('specialty_id')->references('id')->on('specialties')
                      ->onDelete('restrict')->onUpdate('cascade');
              $table->foreign('doctor_id')->references('id')->on('doctors')
                      ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_specialty');
    }
};
