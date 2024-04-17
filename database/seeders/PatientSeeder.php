<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Patient;
use App\Models\User;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Patient::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $patients = [
            [ 
            'user_firstname'=>'Maxime',
            'user_lastname'=>'Santos',
            'birthdate'=>'1990-05-21',
            'gender'=>'M',
            'address'=>'Avenue Charles Quint 555, 1082 Berchem-Sainte-Agathe',
            'about'=>'Je souffre d\'hypertension et je suis actuellement traité avec Lisinopril. Je n\'ai aucune allergie connue.', 
            'emergency_contact_name'=>'Lucas Durand',
            'emergency_contact_phone'=>010101,

            ],
            [ 
            'user_firstname'=>'Nina',
            'user_lastname'=>'Colys',
            'birthdate'=>'1991-05-28',
            'gender'=>'F',
            'address'=>'Boulevard Lambermont 158, 1030 Schaerbeek',
            'about'=>'Je suis traité pour le diabète de type 2 avec Metformin et je suis allergique aux noix et au latex.',    
            'emergency_contact_name'=>'Chloé Petit',
            'emergency_contact_phone'=>020202,
    
            ],
            [ 
            'user_firstname' => 'Lucas',
            'user_lastname' => 'Martin',
            'birthdate'=>'1987-10-21',
            'gender'=>'M',
            'address'=>'Rue de la Loi 200, 1040 Bruxelles',
            'about'=>'Je souffre d\'asthme et j\'utilise régulièrement un inhalateur de Salbutamol. Je n\'ai pas d\'allergies médicamenteuses.',      
            'emergency_contact_name'=>'Maxime Moreau',
            'emergency_contact_phone'=>030303,
        
            ],
            [ 
            'user_firstname' => 'Emilie',
            'user_lastname' => 'Roux',
            'birthdate'=>'1997-11-29',
            'gender'=>'F',
            'address'=>'Parc du Cinquantenaire 11, 1000 Bruxelles',
            'about'=>'J\'ai été diagnostiqué avec de l\'arthrite rhumatoïde et je prends de l\'Humira pour gérer mes symptômes. Je suis allergique aux crustacés.',            
            'emergency_contact_name'=>'Émilie Leroy',
            'emergency_contact_phone'=>040404,
            
            ],
            [ 
            'user_firstname' => 'Chloé',
            'user_lastname' => 'Bernard',
            'birthdate'=>'2007-12-15',
            'gender'=>'F',
            'address'=>'Rue Antoine Dansaert 90, 1000 Bruxelles',  
            'about'=>'Je gère mes troubles anxieux avec du Sertraline et j\'ai une allergie sévère à la pénicilline.',                  
            'emergency_contact_name'=>'Julien Martinez',
            'emergency_contact_phone'=>050505,
                
            ],
            [ 
            'user_firstname' => 'Alexandre',
            'user_lastname' => 'Petit',
            'birthdate'=>'1970-04-26',
            'gender'=>'M',
            'address'=>'Avenue de Tervueren 45, 1040 Etterbeek',      
            'about'=>'Je souffre de maladie cœliaque et suis un régime strict sans gluten. Je prends également des suppléments de fer pour l\'anémie.',                    
            'emergency_contact_name'=>'Sophie Brunet',
            'emergency_contact_phone'=>060606,
                    
            ],
            [ 
            'user_firstname' => 'Julie',
            'user_lastname' => 'Robert',
            'birthdate'=>'1985-05-22',
            'gender'=>'F',
            'address'=>'Chaussée de Waterloo 1501, 1180 Uccle',           
            'about'=>'Je suis traité pour hypercholestérolémie avec de l\'Atorvastatine et je suis sensible au pollen et aux acariens.',                         
            'emergency_contact_name'=>'Antoine Simon',
            'emergency_contact_phone'=>070707,
                        
            ],
            [ 
            'user_firstname' => 'Kevin',
            'user_lastname' => 'Richard',
            'birthdate'=>'2015-01-08',
            'gender'=>'M',
            'address'=>'Place Flagey 7, 1050 Ixelles',              
            'about'=>'Je souffre de migraines chroniques et j\'utilise du Topiramate pour prévenir les crises. Je suis allergique à l\'aspirine.',                              
            'emergency_contact_name'=>'Marie Perrot',
            'emergency_contact_phone'=>808080,
                            
            ],
            [ 
            'user_firstname' => 'Sophie',
            'user_lastname' => 'Dubois',
            'birthdate'=>'2000-02-07',
            'gender'=>'F',
            'address'=>'Rue Neuve 22, 1000 Bruxelles',                   
            'about'=>'Je suis traité pour une thyroïde hypoactive avec de la Levothyroxine et je n\'ai pas d\'allergies alimentaires,'
                         . '  mais je réagis à certains colorants alimentaires.  ',                                
            'emergency_contact_name'=>'Thomas Lefevre',
            'emergency_contact_phone'=>909090,
                                
            ],
            [ 
            'user_firstname' => 'Étienne',
            'user_lastname' => 'Moreau',
            'birthdate'=>'1958-03-09',
            'gender'=>'M',
            'address'=>'Boulevard du Souverain 100, 1160 Auderghem',                       
            'about'=>'Je suis épileptique et stabilisé avec du Valproate. Je dois éviter les sulfamides à cause d\'une allergie.',                                     
            'emergency_contact_name'=>'Camille Renault',
            'emergency_contact_phone'=>101010,
                                    
            ],
            [ 
            'user_firstname' => 'Léa',
            'user_lastname' => 'Simon',
            'birthdate'=>'1997-06-07',
            'gender'=>'F',
            'address'=>'Avenue Louise 240, 1050 Ixelles',                       
            'about'=>'J\'ai des troubles gastro-intestinaux pour lesquels je prends régulièrement de l\'Omeprazole. Je suis allergique aux produits laitiers.',                                    
            'emergency_contact_name'=>'Nicolas Vincent',
            'emergency_contact_phone'=>202020,
                                    
            ],
            [ 
            'user_firstname' => 'Hugo',
            'user_lastname' => 'Laurent',
            'birthdate'=>'2017-09-27',
            'gender'=>'M',
            'address'=>'Rue des Bouchers 15, 1000 Bruxelles',                           
            'about'=>'Je suis diagnostiqué avec de l\'ostéoporose et je suis en traitement avec Alendronate. Je suis sensible au latex et à certains types d\'antibiotiques.',                                           
            'emergency_contact_name'=>'Isabelle Leroux',
            'emergency_contact_phone'=>303030,
                                        
            ],

        ];
         //Prepare the data
         foreach ($patients as &$data) {
            //Search the user for a given user's firstname and lastname
            $user = User::where([
                ['firstname','=',$data['user_firstname'] ],
                ['lastname','=',$data['user_lastname'] ]
            ])->first();

           
            
            unset($data['user_firstname']);
            unset($data['user_lastname']);
           // unset($data['role']);

            $data['user_id'] = $user->id;
            //$data['role_id'] = $role->id;
        }
        unset($data);

        //Insert data in the table
        DB::table('patients')->insert($patients);
    }
}
