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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->foreignId('appointment_id');
            $table->decimal('amount', 10, 2)->nullable();
            $table->string('status', 30);
            $table->string('stripe_charge_id')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('payments');
    }
};
