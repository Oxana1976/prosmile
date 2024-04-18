<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Comment::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
   
        $comments = [
            [
                'appointment_id' => 1,
                'comment' => 'Je suis extrêmement satisfait du traitement reçu aujourd\'hui.'
                    .' Le dentiste a été très attentif à mes inquiétudes et a pris le temps de m\'expliquer chaque étape du processus.'
                    .' Je me sens rassuré et ma douleur est complètement partie. Merci pour votre professionnalisme et votre compassion.',
                'created_at' =>  Carbon::now(),

            ],
            [
                'appointment_id' => 2,
                'comment' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'appointment_id' => 3,
                'comment' => 'La procédure était plus complexe que je ne l\'avais anticipé, et je suis un peu inquiet des douleurs que je ressens maintenant.'
                    .' J\'aurais apprécié plus d\'informations sur ce à quoi m\'attendre après le traitement. ',
                'created_at' => Carbon::now(),
            ],
            [
                'appointment_id' => 4,
                'comment' => '',
                'created_at' => Carbon::now(),
            ],
            [
                'appointment_id' => 5,
                'comment' => 'L\'accueil aujourd\'hui était formidable. La réceptionniste était très aimable et '
                    . 'm\'a aidé à me détendre avant ma procédure. C\'est rassurant de voir que tout le personnel prend soin des patients avec tant d\'attention.',
                'created_at' =>Carbon::now(),
            ],
            [
                'appointment_id' => 6,
                'comment' => 'Je suis assez déçu par la consultation d\'aujourd\'hui. L\'attente a été beaucoup trop longue et '
                    .'le personnel semblait débordé et peu attentif. Lorsque j\'ai finalement vu le docteur, la consultation a semblé précipitée et'
                    .' mes questions n\'ont pas été pleinement adressées. J\'ai toujours des symptômes et je ne me sens pas rassuré sur le plan de traitement proposé. ',
                'created_at' => Carbon::now(),
                
            ],

        ];
        //Insert data in the table
        DB::table('comments')->insert($comments);
    }
}
