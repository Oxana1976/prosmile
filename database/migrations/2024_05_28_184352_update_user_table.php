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
        Schema::table('users', function(Blueprint $table){
            $table->dropIndex('users_login_unique');
            $table->dropColumn('login');
            $table->string('phone_number', 30)->nullable()->change();
        });

        Schema::table('patients', function(Blueprint $table){
            $table->string('address', 100)->nullable()->change();
            $table->date('birthdate')->nullable()->change();
            $table->string('gender', 1)->nullable()->change();
            $table->text('about')->nullable()->change();
            $table->string('emergency_contact_name', 60)->nullable()->change();
            $table->string('emergency_contact_phone', 20)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('login', 30);
            $table->unique('login', 'users_login_unique');
            $table->string('phone_number', 20)->nullable(false)->change();
        });

        Schema::table('patients', function(Blueprint $table){
            $table->string('address', 100)->nullable(false)->change();
            $table->date('birthdate')->nullable(false)->change();
            $table->string('gender', 1)->nullable(false)->change();
            $table->text('about')->nullable(false)->change();
            $table->string('emergency_contact_name', 60)->nullable(false)->change();
            $table->string('emergency_contact_phone', 20)->nullable(false)->change();
        });
    }
};
