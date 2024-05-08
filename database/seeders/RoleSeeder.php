<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // Role::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
        //    //Define data
        //    $roles = [
        //     ['role'=>'admin'],
        //     ['role'=>'member'],
        //     ['role'=>'affiliate'],
        // ];
        
        // //Insert data in the table
        // DB::table('roles')->insert($roles);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        foreach (Role::ROLES as $role)
        {
            Role::query()->create(['role' => $role]);
        }
    }
}
