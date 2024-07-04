<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxTarifGeneralTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('trx_tarif_general')->delete();
        
        DB::table('trx_tarif_general')->insert(array (
            0 => 
            array (
                'seq_no' => 57,
                'tarif_nm' => 'JASA SARANA',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            1 => 
            array (
                'seq_no' => 58,
                'tarif_nm' => 'JASA PELAYANAN',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            2 => 
            array (
                'seq_no' => 59,
                'tarif_nm' => 'JASA MEDIS',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            3 => 
            array (
                'seq_no' => 60,
                'tarif_nm' => 'JASA PELAKSANA',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            4 => 
            array (
                'seq_no' => 61,
                'tarif_nm' => 'BHP',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            5 => 
            array (
                'seq_no' => 62,
                'tarif_nm' => 'PAJAK',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            6 => 
            array (
                'seq_no' => 63,
                'tarif_nm' => 'JASA APOTEKER',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            7 => 
            array (
                'seq_no' => 64,
                'tarif_nm' => 'JASA PELAKSANA FARMASI',
                'insurance_cd' => '',
                'kelas_cd' => '',
                'tarif' => '0',
                'auto_add' => '0',
                'medical_tp' => '',
                'account_cd' => 'AC999',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
        ));

        
    }
}