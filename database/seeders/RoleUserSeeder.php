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
