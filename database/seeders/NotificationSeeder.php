<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Notification;
use Carbon\Carbon;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Notification::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $notifications = [
            [
            'patient_id'=>2,
            'appointment_id'=>1,
            'type'=> 'email_pre_appointment',
            'message'=>'  Votre prochain rendez-vous chez ProSmile le 2024-02-03 à 10:30 ',
            'created_at'=> Carbon::create(2024, 2, 2 , 10, 30),
            'email_sent'=>true,    
            ],
            [
            'patient_id'=>2,
            'appointment_id'=>1,
            'type'=> 'after_appointment',
            'message'=>'  Votre dossier médical a été mis à jour. ',
            'created_at'=> Carbon::create(2024, 2, 3 , 11, 30),
            'email_sent'=>false,    
            ],
            [
            'patient_id'=>1,
            'appointment_id'=>2,
            'type'=> 'email_pre_appointment',
            'message'=>'  Votre prochain rendez-vous chez ProSmile le 2024-02-05 à 12:30 ',
            'created_at'=> Carbon::create(2024, 2, 4 , 12, 30),
            'email_sent'=>true,    
            ],
            [
            'patient_id'=>1,
            'appointment_id'=>2,
            'type'=> 'after_appointment',
            'message'=>'  Votre dossier médical a été mis à jour. ',
            'created_at'=> Carbon::create(2024, 2, 5 , 13, 30),
            'email_sent'=>false,    
            ],
            [
            'patient_id'=>8,
            'appointment_id'=>3,
            'type'=> 'email_pre_appointment',
            'message'=>'  Votre prochain rendez-vous chez ProSmile le 2024-02-03 à 10:30 ',
            'created_at'=> Carbon::create(2024, 2, 2 , 10, 30),
            'email_sent'=>true,    
            ],
            [
            'patient_id'=>8,
            'appointment_id'=>3,
            'type'=> 'after_appointment',
            'message'=>'  Votre dossier médical a été mis à jour. ',
            'created_at'=> Carbon::create(2024, 2, 3 , 11),
            'email_sent'=>false,    
            ],
            [
            'patient_id'=>5,
            'appointment_id'=>4,
            'type'=> 'email_pre_appointment',
            'message'=>'  Votre prochain rendez-vous chez ProSmile le 2024-01-28 à 18:30 ',
            'created_at'=> Carbon::create(2024, 1, 27 , 18, 30),
            'email_sent'=>true,    
            ],
            [
            'patient_id'=>5,
            'appointment_id'=>4,
            'type'=> 'after_appointment',
            'message'=>'  Votre dossier médical a été mis à jour. ',
            'created_at'=> Carbon::create(2024, 1, 28 , 19),
            'email_sent'=>false,    
            ],
            [
            'patient_id'=>11,
            'appointment_id'=>5,
            'type'=> 'email_pre_appointment',
            'message'=>'  Votre prochain rendez-vous chez ProSmile le 2024-03-03 à 10:00 ',
            'created_at'=> Carbon::create(2024, 3, 2 , 10),
            'email_sent'=>true,    
            ],
            [
            'patient_id'=>11,
            'appointment_id'=>5,
            'type'=> 'after_appointment',
            'message'=>'  Votre dossier médical a été mis à jour. ',
            'created_at'=> Carbon::create(2024, 3, 3 , 11),
            'email_sent'=>false,    
            ],
            [
            'patient_id'=>3,
            'appointment_id'=>6,
            'type'=> 'email_pre_appointment',
            'message'=>'  Votre prochain rendez-vous chez ProSmile le 2024-01-15 à 15:30 ',
            'created_at'=> Carbon::create(2024, 1, 14 , 15, 30),
            'email_sent'=>true,    
            ],
            [
            'patient_id'=>3,
            'appointment_id'=>6,
            'type'=> 'after_appointment',
            'message'=>'  Votre dossier médical a été mis à jour. ',
            'created_at'=> Carbon::create(2024, 1, 15 , 16, 30),
            'email_sent'=>false,    
            ],


        ];
          //Insert data in the table
          DB::table('notifications')->insert($notifications);

    }
}
