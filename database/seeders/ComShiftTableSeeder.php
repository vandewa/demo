<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComShiftTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('com_shift')->delete();
        
        \DB::table('com_shift')->insert(array (
            0 => 
            array (
                'shift_cd' => 'SHIFT01',
                'shift_nm' => 'Shift Pagi',
                'time_start' => '1900-01-01 07:00:00',
                'time_end' => '1900-01-01 14:00:00',
                'saldo_start' => '0',
                'login_st' => '0',
                'modi_id' => 'admin',
            ),
            1 => 
            array (
                'shift_cd' => 'SHIFT02',
                'shift_nm' => 'Shift Siang',
                'time_start' => '1900-01-01 14:00:00',
                'time_end' => '1900-01-01 21:00:00',
                'saldo_start' => '0',
                'login_st' => '0',
                'modi_id' => 'admin',
            ),
            2 => 
            array (
                'shift_cd' => 'SHIFT03',
                'shift_nm' => 'Shift Malam',
                'time_start' => '1900-01-01 21:00:00',
                'time_end' => '1900-01-01 07:00:00',
                'saldo_start' => '0',
                'login_st' => '0',
                'modi_id' => 'admin',
            ),
        ));

        
    }
}