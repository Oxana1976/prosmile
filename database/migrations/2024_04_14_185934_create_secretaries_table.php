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
        Schema::create('secretaries', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->foreignId('user_id');
            $table->string('gender',1);

            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('restrict')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secretaries');
    }
};
