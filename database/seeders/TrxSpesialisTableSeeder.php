<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxSpesialisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('trx_spesialis')->delete();

        DB::table('trx_spesialis')->insert(array (
            0 =>
            array (
                'spesialis_cd' => 'SPA',
                'spesialis_nm' => 'SPESIALIS ANAK',
                'modi_id' => 'admin',
            ),
            1 =>
            array (
                'spesialis_cd' => 'SPAN',
                'spesialis_nm' => 'SPESIALIS ANASTESI',
                'modi_id' => 'admin',
            ),
            2 =>
            array (
                'spesialis_cd' => 'SPAND',
                'spesialis_nm' => 'SPESIALIS ANDROLOGI',
                'modi_id' => 'admin',
            ),
            3 =>
            array (
                'spesialis_cd' => 'SPB',
                'spesialis_nm' => 'SPESIALIS BEDAH',
                'modi_id' => 'admin',
            ),
            4 =>
            array (
                'spesialis_cd' => 'SPGK',
                'spesialis_nm' => 'SPESIALIS GIZI KLINIK',
                'modi_id' => 'admin',
            ),
            5 =>
            array (
                'spesialis_cd' => 'SPJ',
                'spesialis_nm' => 'SPESIALIS JANTUNG',
                'modi_id' => 'admin',
            ),
            6 =>
            array (
                'spesialis_cd' => 'SPKG',
                'spesialis_nm' => 'SPESIALIS KONSERVASI GIGI',
                'modi_id' => 'admin',
            ),
            7 =>
            array (
                'spesialis_cd' => 'SPKGA',
                'spesialis_nm' => 'SPESIALIS GIGI ANAK',
                'modi_id' => 'admin',
            ),
            8 =>
            array (
                'spesialis_cd' => 'SPKK',
                'spesialis_nm' => 'SPESIALIS KULIT DAN KELAMIN',
                'modi_id' => 'admin',
            ),
            9 =>
            array (
                'spesialis_cd' => 'SPM',
                'spesialis_nm' => 'SPESIALIS MATA',
                'modi_id' => 'admin',
            ),
            10 =>
            array (
                'spesialis_cd' => 'SPOG',
                'spesialis_nm' => 'SPESIALIS KANDUNGAN',
                'modi_id' => 'admin',
            ),
            11 =>
            array (
                'spesialis_cd' => 'SPORT',
                'spesialis_nm' => 'SPESIALIS ORTHODONTIA GIGI',
                'modi_id' => 'admin',
            ),
            12 =>
            array (
                'spesialis_cd' => 'SPOT',
                'spesialis_nm' => 'SPESIALIS BEDAH ORTHOPEDI DAN TRAUMATOLOGI',
                'modi_id' => 'admin',
            ),
            13 =>
            array (
                'spesialis_cd' => 'SPP',
                'spesialis_nm' => 'SPESIALIS PARU',
                'modi_id' => 'admin',
            ),
            14 =>
            array (
                'spesialis_cd' => 'SPPD',
                'spesialis_nm' => 'SPESIALIS PENYAKIT DALAM',
                'modi_id' => 'admin',
            ),
            15 =>
            array (
                'spesialis_cd' => 'SPPK',
                'spesialis_nm' => 'SPESIALIS PATOLOGI KLINIK',
                'modi_id' => 'admin',
            ),
            16 =>
            array (
                'spesialis_cd' => 'SPRAD',
                'spesialis_nm' => 'SPESIALIS RADIOLOGI',
                'modi_id' => 'admin',
            ),
            17 =>
            array (
                'spesialis_cd' => 'SPS',
                'spesialis_nm' => 'SPESIALIS SARAF',
                'modi_id' => 'admin',
            ),
            18 =>
            array (
                'spesialis_cd' => 'SPTHT',
                'spesialis_nm' => 'SPESIALIS THT',
                'modi_id' => 'admin',
            ),
        ));


    }
}
