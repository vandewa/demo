<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxUnitMedisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('trx_unit_medis')->delete();
        
        DB::table('trx_unit_medis')->insert(array (
            0 => 
            array (
                'medunit_cd' => 'POLIUGD',
                'medunit_nm' => 'POLI UGD',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'poliugd01',
                'queue' => '1001',
                'medunit_cd_bpjs' => NULL,
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            1 => 
            array (
                'medunit_cd' => 'HEMO',
                'medunit_nm' => 'UNIT HEMODIALISA',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'it',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            2 => 
            array (
                'medunit_cd' => 'INSTGIZI',
                'medunit_nm' => 'INSTALASI GIZI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'it',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            3 => 
            array (
                'medunit_cd' => 'KMO',
                'medunit_nm' => 'INSTALASI BEDAH SENTRAL',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            4 => 
            array (
                'medunit_cd' => 'LAB00',
                'medunit_nm' => 'LABORATORIUM',
                'medicalunit_tp' => 'MEDICALUNIT_TP_2',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            5 => 
            array (
                'medunit_cd' => 'POLIAKU',
                'medunit_nm' => 'POLI AKUPUNTUR',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'it',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            6 => 
            array (
                'medunit_cd' => 'POLIANST',
                'medunit_nm' => 'POLI ANESTESI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'it',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            7 => 
            array (
                'medunit_cd' => 'POLIEMP',
                'medunit_nm' => 'POLI KARYAWAN',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            8 => 
            array (
                'medunit_cd' => 'POLIFIS',
                'medunit_nm' => 'FISIOTERAPI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            9 => 
            array (
                'medunit_cd' => 'POLIGIZI',
                'medunit_nm' => 'POLI GIZI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            10 => 
            array (
                'medunit_cd' => 'POLIREHAB',
                'medunit_nm' => 'POLI REHABILITASI MEDIK',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            11 => 
            array (
                'medunit_cd' => 'POLISPA',
                'medunit_nm' => 'POLI ANAK',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => 'ANA',
                'data_mapcd' => 'ANA',
                'data_exst' => NULL,
            ),
            12 => 
            array (
                'medunit_cd' => 'POLISPB',
                'medunit_nm' => 'POLI BEDAH',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => 'BED',
                'data_mapcd' => 'BED',
                'data_exst' => NULL,
            ),
            13 => 
            array (
                'medunit_cd' => 'POLISPD',
                'medunit_nm' => 'POLI PENYAKIT DALAM',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => 'INT',
                'data_mapcd' => 'INT',
                'data_exst' => NULL,
            ),
            14 => 
            array (
                'medunit_cd' => 'POLISPJ',
                'medunit_nm' => 'POLI JANTUNG',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            15 => 
            array (
                'medunit_cd' => 'POLISPJW',
                'medunit_nm' => 'POLI PENYAKIT JIWA',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            16 => 
            array (
                'medunit_cd' => 'POLISPKK',
                'medunit_nm' => 'POLI KULIT DAN KELAMIN',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            17 => 
            array (
                'medunit_cd' => 'POLISPM',
                'medunit_nm' => 'POLI MATA',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            18 => 
            array (
                'medunit_cd' => 'POLISPOG',
                'medunit_nm' => 'POLI KANDUNGAN',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            19 => 
            array (
                'medunit_cd' => 'POLISPOT',
                'medunit_nm' => 'POLI ORTHOPEDI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            20 => 
            array (
                'medunit_cd' => 'POLISPS',
                'medunit_nm' => 'POLI SARAF',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => 'SAR',
                'data_mapcd' => 'SAR',
                'data_exst' => NULL,
            ),
            21 => 
            array (
                'medunit_cd' => 'POLISPTHT',
                'medunit_nm' => 'POLI THT',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            22 => 
            array (
                'medunit_cd' => 'POLITK',
                'medunit_nm' => 'POLI TUMBUH KEMBANG',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            23 => 
            array (
                'medunit_cd' => 'POLIVCT',
                'medunit_nm' => 'POLI VCT',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'it',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            24 => 
            array (
                'medunit_cd' => 'RADIO00',
                'medunit_nm' => 'RADIOLOGI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_3',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            25 => 
            array (
                'medunit_cd' => 'POLIUMUM',
                'medunit_nm' => 'POLI UMUM',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => '1002',
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            26 => 
            array (
                'medunit_cd' => 'POLIGIGI',
                'medunit_nm' => 'POLI GIGI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => '1002',
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            27 => 
            array (
                'medunit_cd' => 'POLIURLG',
                'medunit_nm' => 'POLI UROLOGI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'it',
                'queue' => NULL,
                'medunit_cd_bpjs' => 'URO',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
        ));

        
    }
}