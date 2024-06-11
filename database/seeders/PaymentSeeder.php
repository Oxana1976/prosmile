<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Carbon\Carbon;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Payment::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $payments = [
            [
            'patient_id'=>2,
            'appointment_id'=>1,
            'amount'=> 123.60,
            'status'=>'completed',
            'stripe_charge_id'=>'ch_a3pWwHPdwSNme4UVCxv6exRR',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'patient_id'=>1,
            'appointment_id'=>2,
            'amount'=>180.00,
            'status'=>'completed',
            'stripe_charge_id'=>'ch_TIBDfzsnujGivnEGVZfy1lAO',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'patient_id'=>8,
            'appointment_id'=>3,
            'amount'=>258.50,
            'status'=>'completed',
            'stripe_charge_id'=>'ch_2O0heGU8mWyZM5I2wTTursrg',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'patient_id'=>5,
            'appointment_id'=>4,
            'amount'=>140.80,
            'status'=>'completed',
            'stripe_charge_id'=>'ch_kUjmpDBk8ljzoIHd1GkcUOfp',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'patient_id'=>11,
            'appointment_id'=>5,
            'amount'=>320.00,
            'status'=>'completed',
            'stripe_charge_id'=>'ch_nVe3myxQQ8dX23PZ2Ek386I1',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],
            [
            'patient_id'=>3,
            'appointment_id'=>6,
            'amount'=>135.00,
            'status'=>'completed',
            'stripe_charge_id'=>'ch_7dRYNIeMZJzRWHbQN3PUBJNx',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            ],

            ];
              //Insert data in the table
            DB::table('payments')->insert($payments);
    }
}
