<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UserRole;
use App\Models\User;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $userRoles=[
            [ 
            'user_firstname'=>'Bob',
            'user_lastname'=>'Sull',
            'role'=>'admin',

            ],
            [ 
            'user_firstname'=>'Anna',
            'user_lastname'=>'Silva',
            'role'=>'member',
    
            ],

            [ 
            'user_firstname'=>'Patricia',
            'user_lastname'=>'Merlin',
            'role'=>'member',
            ],
            [ 
            'user_firstname'=>'Pierre',
            'user_lastname'=>'Collet',
            'role'=>'member',
            ],
            [ 
            'user_firstname'=>'Marine',
            'user_lastname'=>'Duval',
            'role'=>'member',
        
            ],

            [ 
            'user_firstname'=>'Oxana',
            'user_lastname'=>'Eremeeva',
            'role'=>'admin',
        
            ],
            [ 
            'user_firstname'=>'John',
            'user_lastname'=>'Smit',
            'role'=>'member',
            
             ],
            [ 
            'user_firstname'=>'Maxime',
            'user_lastname'=>'Santos',
            'role'=>'affiliate',
            
            ],
            [ 
            'user_firstname'=>'Nina',
            'user_lastname'=>'Colys',
            'role'=>'affiliate',

            ],
            [
            'user_firstname' => 'Lucas',
            'user_lastname' => 'Martin',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Emilie',
            'user_lastname' => 'Roux',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Chloé',
            'user_lastname' => 'Bernard',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Alexandre',
            'user_lastname' => 'Petit',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Julie',
            'user_lastname' => 'Robert',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Kevin',
            'user_lastname' => 'Richard',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Sophie',
            'user_lastname' => 'Dubois',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Étienne',
            'user_lastname' => 'Moreau',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Léa',
            'user_lastname' => 'Simon',
            'role' => 'affiliate',
            ],
            [
            'user_firstname' => 'Hugo',
            'user_lastname' => 'Laurent',
            'role' => 'affiliate',
            ],
            
            [ 
            'user_firstname'=>'Katya',
            'user_lastname'=>'Dupont',
            'role'=>'admin',
                    
            ],
            [ 
            'user_firstname'=>'Elodie',
            'user_lastname'=>'Mulon',
            'role'=>'admin',
                        
            ],

        ];

            //Prepare the data
            foreach ($userRoles as &$data) {
                //Search the artist for a given artist's firstname and lastname
                $user = User::where([
                    ['firstname','=',$data['user_firstname'] ],
                    ['lastname','=',$data['user_lastname'] ]
                ])->first();
    
                //Search the type for a given type
                $role = Role::firstWhere('role',$data['role']);
                
                unset($data['user_firstname']);
                unset($data['user_lastname']);
                unset($data['role']);
    
                $data['user_id'] = $user->id;
                $data['role_id'] = $role->id;
            }
            unset($data);
    
            //Insert data in the table
            DB::table('role_user')->insert($userRoles);
    }
}
