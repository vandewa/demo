<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComAccountGroupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('com_account_group')->delete();

        \DB::table('com_account_group')->insert(array (
            0 =>
            array (
                'accgroup_cd' => 'GRPACC00',
                'accgroup_nm' => 'ADMINISTRASI',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            1 =>
            array (
                'accgroup_cd' => 'GRPACC01',
                'accgroup_nm' => 'DOKTER',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            2 =>
            array (
                'accgroup_cd' => 'GRPACC02',
                'accgroup_nm' => 'KAMAR',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            3 =>
            array (
                'accgroup_cd' => 'GRPACC03',
                'accgroup_nm' => 'FARMASI/LOGISTIK',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            4 =>
            array (
                'accgroup_cd' => 'GRPACC04',
                'accgroup_nm' => 'LABORATORIUM',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            5 =>
            array (
                'accgroup_cd' => 'GRPACC05',
                'accgroup_nm' => 'RADIOLOGI',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            6 =>
            array (
                'accgroup_cd' => 'GRPACC06',
                'accgroup_nm' => 'TINDAKAN MEDIS',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            7 =>
            array (
                'accgroup_cd' => 'GRPACC07',
                'accgroup_nm' => 'PARAMEDIS',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            8 =>
            array (
                'accgroup_cd' => 'GRPACC08',
                'accgroup_nm' => 'PENDAPATAN LAIN',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
            9 =>
            array (
                'accgroup_cd' => 'GRPACC99',
                'accgroup_nm' => 'LAIN-LAIN',
                'order_no' => NULL,
                'modi_id' => NULL,
            ),
        ));


    }
}
