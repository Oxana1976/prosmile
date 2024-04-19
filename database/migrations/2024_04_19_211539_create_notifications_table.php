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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->foreignId('patient_id');
            $table->foreignId('appointment_id');
            $table->string('type', 30);
            $table->text('message');
            $table->timestamp('created_at')->nullable();
            $table->boolean('email_sent');


            // Définir les clés étrangères
            $table->foreign('patient_id')->references('id')->on('patients')
             ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('appointment_id')->references('id')->on('appointments')
             ->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
