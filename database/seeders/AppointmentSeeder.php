<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Appointment::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $appointments = [
            [
            'patient_id'=>2,
            'doctor_id'=>1,
            'date_time'=>'2024-02-03 10:30',
            'status'=>'Completé',
            'duration'=>'30',
            'diagnostic'=>'Abcès Dentaire',
            'description'=>'Un abcès dentaire a été diagnostiqué sur la racine de la troisième molaire inférieure droite.'
                .' Un traitement endodontique est nécessaire pour enlever le tissu infecté et préserver la dent,'
                .' suivi d\'une couronne pour restaurer sa structure et sa fonction.',
            'rx_image_url'=>'patient_2.jpg',

            ],

            [
            'patient_id'=>1,
            'doctor_id'=>3,
            'date_time'=>'2024-02-05 12:30',
            'status'=>'Completé',
            'duration'=>'30',
            'diagnostic'=>'Bruxisme et Usure Dentaire',
            'description'=>'Des signes d\'usure dentaire sévère attribuables au bruxisme nocturne ont été constatés.'
                .' Un protège-dents sur mesure pour la nuit a été conçu pour protéger les dents contre une usure supplémentaire et'
                .' pour réduire la tension au niveau de la mâchoire.',
            'rx_image_url'=>'',
            ],
            [
            'patient_id'=>8,
            'doctor_id'=>6,
            'date_time'=>'2024-02-03 10:30',
            'status'=>'Completé',
            'duration'=>'30',
            'diagnostic'=>'Erosion Dentaire et Sensibilité',
            'description'=>'Des érosions prononcées de l\'émail ont été observées sur les canines et les prémolaires,'
                .' probablement dues à un régime alimentaire acide et à un brossage trop vigoureux.'
                .'Un traitement de fluorure et l\'utilisation d\'un dentifrice désensibilisant ont été prescrits,'
                .' ainsi que des recommandations pour des techniques de brossage douces.',
            'rx_image_url'=>'',
    
            ],
    
            [
            'patient_id'=>5,
            'doctor_id'=>4,
            'date_time'=>'2024-01-28 18:30',
            'status'=>'Completé',
            'duration'=>'30',
            'diagnostic'=>'Perte Dentaire Traumatique',
            'description'=>'Après un traumatisme subi lors d\'une activité sportive,'
                . 'le patient a perdu la première prémolaire supérieure gauche. '
                . 'La zone affectée a été nettoyée et préparée pour une prothèse temporaire avant la mise en place '
                . ' d\'un implant dentaire pour une solution à long terme.',
            'rx_image_url'=>'patient_5.jpg',
            ],
            [
            'patient_id'=>11,
            'doctor_id'=>3,
            'date_time'=>'2024-03-03 10:00',
            'status'=>'Completé',
            'duration'=>'30',
            'diagnostic'=>'Maladie Parodontale',
            'description'=>'Le patient présente des signes de gingivite avec inflammation et saignement des gencives,'
                .' surtout autour des incisives inférieures. Un nettoyage en profondeur par détartrage et '
                . 'surfaçage radiculaire est conseillé pour éliminer la plaque et le tartre accumulés et aider à la régression de l\'inflammation.',
            'rx_image_url'=>'',
        
            ],
        
            [
            'patient_id'=>3,
            'doctor_id'=>3,
            'date_time'=>'2024-01-15 15:30',
            'status'=>'Completé',
            'duration'=>'30',
            'diagnostic'=>'Caries Dentaire',
            'description'=>'À la suite d\'une radiographie et d\'un examen clinique approfondi,'
                .' un début de carie dentaire a été identifié sur la surface occlusale de la deuxième molaire supérieure droite.'
                .' Un traitement conservateur par obturation composite est recommandé pour restaurer la fonction et prévenir toute progression de la carie.',
            'rx_image_url'=>'patient_3.jpg',
            ],
            [
            'patient_id'=>4,
            'doctor_id'=>5,
            'date_time'=>'2024-06-03 10:00',
            'status'=>'Planifié',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
            
            ],
            
            [
            'patient_id'=>10,
            'doctor_id'=>4,
            'date_time'=>'2024-06-15 15:30',
            'status'=>'Planifié',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
            ],
            [
            'patient_id'=>9,
            'doctor_id'=>2,
            'date_time'=>'2024-07-03 11:30',
            'status'=>'Planifié',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
                
            ],
                
            [
            'patient_id'=>6,
            'doctor_id'=>6,
            'date_time'=>'2024-07-15 16:30',
            'status'=>'Planifié',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
            ],
            [
            'patient_id'=>7,
            'doctor_id'=>4,
            'date_time'=>'2024-05-03 11:00',
            'status'=>'Annulé',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
                    
            ],
                    
            [
            'patient_id'=>12,
            'doctor_id'=>1,
            'date_time'=>'2024-05-15 17:30',
            'status'=>'Annulé',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
            ],
            [
            'patient_id'=>8,
            'doctor_id'=>5,
            'date_time'=>'2024-02-03 12:00',
            'status'=>'Annulé',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
                        
            ],
                        
            [
            'patient_id'=>7,
            'doctor_id'=>4,
            'date_time'=>'2024-03-15 17:00',
            'status'=>'Annulé',
            'duration'=>'30',
            'diagnostic'=>'',
            'description'=>'',
            'rx_image_url'=>'',
            ]


        ];
          //Insert data in the table
        DB::table('appointments')->insert($appointments);
    }
}
