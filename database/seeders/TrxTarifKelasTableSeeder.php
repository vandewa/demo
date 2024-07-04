<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxTarifKelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('trx_tarif_kelas')->delete();
        
        DB::table('trx_tarif_kelas')->insert(array (
            0 => 
            array (
                'seq_no' => 1,
                'insurance_cd' => '',
                'kelas_cd' => 'KLVVIP',
                'tarif' => '485000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            1 => 
            array (
                'seq_no' => 3,
                'insurance_cd' => '',
                'kelas_cd' => 'KL03',
                'tarif' => '90000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            2 => 
            array (
                'seq_no' => 4,
                'insurance_cd' => '',
                'kelas_cd' => 'KL01',
                'tarif' => '250000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            3 => 
            array (
                'seq_no' => 5,
                'insurance_cd' => '',
                'kelas_cd' => 'KL02',
                'tarif' => '175000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            4 => 
            array (
                'seq_no' => 6,
                'insurance_cd' => '',
                'kelas_cd' => 'KL05',
                'tarif' => '300000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            5 => 
            array (
                'seq_no' => 7,
                'insurance_cd' => '',
                'kelas_cd' => 'KLVIP',
                'tarif' => '485000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
        ));

        
    }
}