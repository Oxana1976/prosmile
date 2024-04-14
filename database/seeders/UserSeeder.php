<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $users = [
            [
                'login'=>'bob',
                'firstname'=>'Bob',
                'lastname'=>'Sull',
                'email'=>'bob@sull.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>987456,
            ],
            [
                'login'=>'john',
                'firstname'=>'John',
                'lastname'=>'Smit',
                'email'=>'john@sull.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>123456,
            ],
            [
                'login'=>'anna',
                'firstname'=>'Anna',
                'lastname'=>'Silva',
                'email'=>'anna@sull.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>456123,
            ],
            [
                'login'=>'oxana',
                'firstname'=>'Oxana',
                'lastname'=>'Eremeeva',
                'email'=>'oxana.er@hotmail.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>237896,
            ],
            [
                'login'=>'maxime',
                'firstname'=>'Maxime',
                'lastname'=>'Santos',
                'email'=>'maxime@hotmail.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>123789,
            ],
            [
                'login'=>'nina',
                'firstname'=>'Nina',
                'lastname'=>'Colys',
                'email'=>'nina@hotmail.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>321654,
            ],
            
            [
                'login'=>'katya',
                'firstname'=>'Katya',
                'lastname'=>'Dupont',
                'email'=>'katya@hotmail.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>852963,
            ],
            [
                'login'=>'elodie',
                'firstname'=>'Elodie',
                'lastname'=>'Mulon',
                'email'=>'elodie@hotmail.com',
                'password'=>'12345678',
                'language'=>'fr',
                'created_at'=>'',
                'phone_number'=>963741,
            ],
           

        ];
        foreach($users as &$user) {
            $user['created_at'] = Carbon::now()->toDateTimeString();    //date('Y-m-d G:i:s');
            $user['password'] = Hash::make($user['password']);
        }

        //Insert data in the table
        DB::table('users')->insert($users);
    }
}
