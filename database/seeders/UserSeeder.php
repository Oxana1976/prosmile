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
    // public function run(): void
    // {
    //     //
    //     DB::statement('SET FOREIGN_KEY_CHECKS=0');
    //     User::truncate();
    //     DB::statement('SET FOREIGN_KEY_CHECKS=1');
    //     $users = [
    //         [
    //             'login'=>'bob',
    //             'firstname'=>'Bob',
    //             'lastname'=>'Sull',
    //             'email'=>'bob@sull.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>987456,
    //         ],
    //         [
    //             'login'=>'john',
    //             'firstname'=>'John',
    //             'lastname'=>'Smit',
    //             'email'=>'john@sull.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>123456,
    //         ],
    //         [
    //             'login'=>'anna',
    //             'firstname'=>'Anna',
    //             'lastname'=>'Silva',
    //             'email'=>'anna@sull.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>456123,
    //         ],
    //         [
    //             'login'=>'patricia',
    //             'firstname'=>'Patricia',
    //             'lastname'=>'Merlin',
    //             'email'=>'patricia@sull.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>852123,
    //         ],
    //         [
    //             'login'=>'pierre',
    //             'firstname'=>'Pierre',
    //             'lastname'=>'Collet',
    //             'email'=>'pierre@sull.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>357159,
    //         ],
    //         [
    //             'login'=>'marine',
    //             'firstname'=>'Marine',
    //             'lastname'=>'Duval',
    //             'email'=>'marine@sull.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>546213,
    //         ],

    //         [
    //             'login'=>'oxana',
    //             'firstname'=>'Oxana',
    //             'lastname'=>'Eremeeva',
    //             'email'=>'oxana.er@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>237896,
    //         ],
    //         [
    //             'login'=>'maxime',
    //             'firstname'=>'Maxime',
    //             'lastname'=>'Santos',
    //             'email'=>'maxime@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>123789,
    //         ],
    //         [
    //             'login'=>'nina',
    //             'firstname'=>'Nina',
    //             'lastname'=>'Colys',
    //             'email'=>'nina@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>321654,
    //         ],
            
    //         [
    //             'login'=>'katya',
    //             'firstname'=>'Katya',
    //             'lastname'=>'Dupont',
    //             'email'=>'katya@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>852963,
    //         ],
    //         [
    //             'login'=>'elodie',
    //             'firstname'=>'Elodie',
    //             'lastname'=>'Mulon',
    //             'email'=>'elodie@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>963741,
    //         ],

    //         [
    //             'login'=>'lucas',
    //             'firstname'=>'Lucas',
    //             'lastname'=>'Martin',
    //             'email'=>'lucas@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>111111,
    //         ],
    //         [
    //             'login'=>'emilie',
    //             'firstname'=>'Emilie',
    //             'lastname'=>'Roux',
    //             'email'=>'emilie@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>222222,
    //         ],
    //         [
    //             'login'=>'chloé',
    //             'firstname'=>'Chloé',
    //             'lastname'=>'Bernard',
    //             'email'=>'chloe@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>333333,
    //         ],
    //         [
    //             'login'=>'alexandre',
    //             'firstname'=>'Alexandre',
    //             'lastname'=>'Petit',
    //             'email'=>'alexandre@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>444444,

    //         ],
    //         [
    //             'login'=>'julie',
    //             'firstname'=>'Julie',
    //             'lastname'=>'Robert',
    //             'email'=>'julie@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>555555,
                
    //         ],
    //         [
    //             'login'=>'kevin',
    //             'firstname'=>'Kevin',
    //             'lastname'=>'Richard',
    //             'email'=>'kevin@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>666666,
                
    //         ],
    //         [
    //             'login'=>'sophie',
    //             'firstname'=>'Sophie',
    //             'lastname'=>'Dubois',
    //             'email'=>'sophie@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>777777,
                
    //         ],
    //         [
    //             'login'=>'étienne',
    //             'firstname'=>'Étienne',
    //             'lastname'=>'Moreau',
    //             'email'=>'etienne@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>888888,
                
    //         ],
    //         [
    //             'login'=>'léa',
    //             'firstname'=>'Léa',
    //             'lastname'=>'Simon',
    //             'email'=>'léa@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>999999,
                
    //         ],
    //         [
    //             'login'=>'hugo',
    //             'firstname'=>'Hugo',
    //             'lastname'=>'Laurent',
    //             'email'=>'hugo@hotmail.com',
    //             'password'=>'12345678',
    //             'language'=>'fr',
    //             'created_at'=>'',
    //             'phone_number'=>898989,
                
    //         ],
            
           

    //     ];
    //     foreach($users as &$user) {
    //         $user['created_at'] = Carbon::now()->toDateTimeString();    //date('Y-m-d G:i:s');
    //         $user['password'] = Hash::make($user['password']);
    //     }

    //     //Insert data in the table
    //     DB::table('users')->insert($users);
    // }

    public function run(): void
    {
        User::factory(20)->create();
        //we create one "admin" here
        User::factory()->chief()->create(
            [
                'email' => 'chief@mail.com',
            ]
        );
    }
}
