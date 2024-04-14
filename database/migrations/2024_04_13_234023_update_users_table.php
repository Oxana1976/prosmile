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
        //
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'firstname');
        });

        Schema::table('users', function (Blueprint $table) {});

        Schema::table('users', function (Blueprint $table) {
            // Modifiez la colonne renommée
            $table->string('firstname', 60)->change();

            // Ajoutez les nouvelles colonnes
            $table->string('lastname', 60);
            $table->string('login', 30);
            $table->string('language', 2);
            $table->char('phone_number', 20);

            // Ajoutez une contrainte unique
            $table->unique('login', 'users_login_unique');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_login_unique');
            $table->dropColumn(['lastname', 'login', 'language', 'phone_number']);
            
            // Remettre la colonne 'firstname' à son état d'origine et renommer
            $table->string('firstname')->change();
            $table->renameColumn('firstname', 'name');
        });
    }
};
