<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;
use App\Models\User;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Doctor::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $doctors=[
            [
                'user_firstname'=>'Bob',
                'user_lastname'=>'Sull',
                'gender'=>'M',
                'inami'=>'89907172278',

                'description'=>'Bob est le directeur et l\'un des chirurgiens-dentistes chevronnés de notre cabinet.'
                    . ' Spécialisé en orthodontie, il apporte une expertise approfondie dans le traitement des malocclusions dentaires,  '
                    . ' assurant à chaque patient un sourire non seulement esthétique mais aussi fonctionnel.  '
                    . 'Avec une passion indéniable pour la dentisterie et une approche patient-centrée,'
                    . 'Bob s\'engage à fournir des soins de la plus haute qualité.'
                    . ' Sa vision pour le cabinet garantit que tous les patients reçoivent des soins personnalisés et adaptés à leurs besoins uniques,'
                    . 'faisant de notre cabinet un leader dans le domaine dentaire. '
                    . ' Ses compétences en gestion et son dévouement envers son équipe font de lui un leader inspirant et respecté parmi ses collègues.',
                'photo_url'=>'bob.jpg',
               

            ],
            [
                'user_firstname'=>'John',
                'user_lastname'=>'Smit',
                'gender'=>'M',
                'inami'=>'11850752817',

                'description'=>'John est un membre précieux de notre équipe dentaire, spécialisé en parodontologie et en endodontie. '
                    . 'En tant que parodontiste, il se concentre sur la prévention, le diagnostic,  '
                    . ' et le traitement des maladies affectant les gencives et les structures de support des dents.'
                    . 'Sa maîtrise en endodontie, notamment dans les traitements de canal, '
                    . 'permet à nos patients de conserver leurs dents naturelles dans un état optimal de santé. '
                    . ' Avec une approche minutieuse et une grande attention aux détails,'
                    . ' John s\'assure que chaque intervention soit réalisée avec le plus grand soin, '
                    . 'visant à réduire la douleur et à améliorer le bien-être général de ses patients. '
                    . 'Son expertise et son approche empathique de la dentisterie assurent des résultats exceptionnels et '
                    . 'contribuent grandement à la réputation d\'excellence de notre cabinet.',
                'photo_url'=>'john.jpg',
               

            ],
            [
                'user_firstname'=>'Anna',
                'user_lastname'=>'Silva',
                'gender'=>'F',
                'inami'=>'48578331776',

                'description'=>'Anna est une stomatologue dévouée et une pédodontiste expérimentée, '
                    . 'apportant une expertise précieuse à notre cabinet dentaire. En tant que stomatologue, '
                    . 'elle traite les maladies de la bouche, des dents, des mâchoires et des tissus environnants,'
                    . 'en se concentrant particulièrement sur les diagnostics complexes et les interventions chirurgicales. '
                    . ' Sa spécialisation en pédodontie lui permet de fournir des soins dentaires adaptés aux enfants, '
                    . ' de l\'âge du nourrisson jusqu\'à l\'adolescence. '
                    . ' Anna crée un environnement accueillant et rassurant pour ses jeunes patients, '
                    . ' en mettant l\'accent sur l\'éducation précoce à l\'hygiène bucco-dentaire. '
                    . ' Elle utilise des techniques douces et des technologies de pointe pour s\'assurer que chaque enfant bénéficie d\'une '
                    . 'expérience positive et enrichissante, ce qui est essentiel pour instaurer une relation de confiance durable avec les soins dentaires.',
                'photo_url'=>'anna.jpg',
               

            ],
            [
                'user_firstname'=>'Patricia',
                'user_lastname'=>'Merlin',
                'gender'=>'F',
                'inami'=>'63011334674',

                'description'=>'Patricia, chirurgien-dentiste et endodontiste qualifiée,'
                    . ' joue un rôle crucial dans notre cabinet en fournissant des soins dentaires spécialisés.  '
                    . ' En tant que chirurgien-dentiste, elle excelle dans tous les aspects des soins dentaires généraux, '
                    . ' y compris les diagnostics, les traitements conservateurs, et les restaurations complexes. '
                    . 'Sa spécialisation en endodontie la rend particulièrement apte à traiter les cas avancés de maladies des canaux radiculaires, '
                    . 'où elle utilise des techniques avancées pour préserver les dents qui pourraient autrement nécessiter une extraction.'
                    . ' Elle est reconnue pour sa capacité à gérer des situations dentaires complexes avec compassion et expertise, '
                    . 'assurant ainsi des soins de la plus haute qualité.',
                'photo_url'=>'patricia.jpg',
               

            ],
            [
                'user_firstname'=>'Pierre',
                'user_lastname'=>'Collet',
                'gender'=>'M',
                'inami'=>'78791685238',

                'description'=>'Pierre est un chirurgien-dentiste et pédodontiste chevronné, '
                    . ' qui apporte une expertise précieuse dans le soin dentaire des enfants et des adolescents.  '
                    . ' En tant que chirurgien-dentiste, il excelle dans la prévention, le diagnostic, '
                    . ' et le traitement des maladies dentaires, offrant une gamme complète de services pour maintenir une santé bucco-dentaire optimale. '
                    . ' Sa spécialisation en pédodontie lui permet de fournir des soins spécialement adaptés aux jeunes patients, '
                    . ' en utilisant des approches qui minimisent l\'anxiété et favorisent une attitude positive envers les soins dentaires.'
                    . ' Pierre est particulièrement doué pour créer un environnement chaleureux et accueillant pour les enfants, '
                    . ' leur apprenant l\'importance de lh\'ygiène dentaire de manière ludique et engageante.'
                    . ' Il est patient et compréhensif, ce qui le rend extrêmement populaire parmi ses jeunes patients et leurs parents. ',
                'photo_url'=>'pierre.jpg',
               

            ],
            [
                'user_firstname'=>'Marine',
                'user_lastname'=>'Duval',
                'gender'=>'F',
                'inami'=>'69644185039',

                'description'=>'Marine est une figure éminente dans notre cabinet, '
                    . 'spécialisée en chirurgie maxillo-faciale et en orthodontie. '
                    . ' En tant que chirurgien maxillo-facial, elle traite une gamme étendue de conditions médicales et dentaires affectant la mâchoire, '
                    . ' le visage, et la cavité buccale, y compris les traumatismes faciaux, les anomalies congénitales et les dysfonctions de l\'articulation temporo-mandibulaire. '
                    . ' Sa compétence en orthodontie lui permet de corriger les malpositions dentaires et les déformations du visage,'
                    . ' en concevant des traitements personnalisés qui améliorent à la fois la fonctionnalité et l\'esthétique des sourires de ses patients.'
                    . ' Marine est reconnue pour son approche intégrative qui combine ces deux spécialités,'
                    . ' offrant des solutions complètes qui prennent en compte à la fois la structure faciale et l\'alignement dentaire. '
                    . 'Elle est passionnée par l\'amélioration de la qualité de vie de ses patients à travers des interventions chirurgicales précises et '
                    . 'des traitements orthodontiques soigneusement planifiés. Sa capacité à traiter des cas complexes avec dextérité et '
                    . ' son dévouement envers des résultats exceptionnels font d\'elle une spécialiste très respectée par ses patients et ses pairs.',
                'photo_url'=>'marine.jpg',
               

            ]

            ];

             //Prepare the data
             foreach ($doctors as &$data) {
                //Search the artist for a given artist's firstname and lastname
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
            DB::table('doctors')->insert($doctors);
    }
}
