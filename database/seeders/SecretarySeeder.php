<?php

namespace Database\Seeders;

use App\Models\Secretary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class SecretarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Secretary::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $secrataries=[
           
          
            [ 
            'user_firstname'=>'Oxana',
            'user_lastname'=>'Eremeeva',
            //'role'=>'admin',
            'gender'=>'F',
        
            ],
         
            [ 
            'user_firstname'=>'Katya',
            'user_lastname'=>'Dupont',
            //'role'=>'admin',
            'gender'=>'F',
                    
            ],
            [ 
            'user_firstname'=>'Elodie',
            'user_lastname'=>'Mulon',
            //'role'=>'admin',
            'gender'=>'F',
                        
            ],

        ];

            //Prepare the data
            foreach ($secrataries as &$data) {
                //Search the user for a given secretaries firstname and lastname
                $user = User::where([
                    ['firstname','=',$data['user_firstname'] ],
                    ['lastname','=',$data['user_lastname'] ]
                ])->first();
    
                //Search the type for a given type
                //$role = Role::firstWhere('role',$data['role']);
                
                unset($data['user_firstname']);
                unset($data['user_lastname']);
               // unset($data['role']);
    
                $data['user_id'] = $user->id;
                //$data['role_id'] = $role->id;
            }
            unset($data);
    
            //Insert data in the table
            DB::table('secretaries')->insert($secrataries);
    }
}
