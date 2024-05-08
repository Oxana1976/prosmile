<?php
use App\Models\Role;
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
        Schema::drop('role_user');
        Schema::table('users', function (Blueprint $table){
            $table->foreignId('role_id');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onDelete('restrict')->onUpdate('cascade');
        });
        //need to make it in 2 steps, otherwise the column don't have time to drop before inserting new role column
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('role');
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->enum('role', Role::ROLES);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('role_id');
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('role');
        });
        Schema::table('roles', function (Blueprint $table) {
            $table->string('role', 30);
        });
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('role_id');

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onDelete('restrict')->onUpdate('cascade');
        });
    }
};
