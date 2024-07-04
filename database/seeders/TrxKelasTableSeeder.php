<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxKelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('trx_kelas')->delete();
        
        DB::table('trx_kelas')->insert(array (
            0 => 
            array (
                'kelas_cd' => 'KL01',
                'kelas_nm' => 'KELAS I',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '3',
                'data_mapcd' => NULL,
            ),
            1 => 
            array (
                'kelas_cd' => 'KL02',
                'kelas_nm' => 'KELAS II',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '4',
                'data_mapcd' => NULL,
            ),
            2 => 
            array (
                'kelas_cd' => 'KL03',
                'kelas_nm' => 'KELAS III',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '5',
                'data_mapcd' => NULL,
            ),
            3 => 
            array (
                'kelas_cd' => 'KLVIP',
                'kelas_nm' => 'KELAS VIP',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '2',
                'data_mapcd' => NULL,
            ),
            4 => 
            array (
                'kelas_cd' => 'KL05',
                'kelas_nm' => 'UTAMA',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => NULL,
                'data_mapcd' => NULL,
            ),
            5 => 
            array (
                'kelas_cd' => 'KLVVIP',
                'kelas_nm' => 'KELAS VVIP',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '1',
                'data_mapcd' => NULL,
            ),
            6 => 
            array (
                'kelas_cd' => 'KLICU',
                'kelas_nm' => 'KELAS ICU',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '7',
                'data_mapcd' => NULL,
            ),
            7 => 
            array (
                'kelas_cd' => 'KLICCU',
                'kelas_nm' => 'KELAS ICCU',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '6',
                'data_mapcd' => NULL,
            ),
        ));

        
    }
}