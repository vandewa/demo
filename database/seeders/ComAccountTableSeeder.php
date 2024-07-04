<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComAccountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('com_account')->delete();
        
        \DB::table('com_account')->insert(array (
            0 => 
            array (
                'account_cd' => 'AC000',
                'accgroup_cd' => 'GRPACC00',
                'account_nm' => 'ADMINISTRASI',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            1 => 
            array (
                'account_cd' => 'AC001',
                'accgroup_cd' => 'GRPACC00',
                'account_nm' => 'ADMINISTRASI RAWAT JALAN',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            2 => 
            array (
                'account_cd' => 'AC002',
                'accgroup_cd' => 'GRPACC00',
                'account_nm' => 'ADMINISTRASI RAWAT INAP',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            3 => 
            array (
                'account_cd' => 'AC003',
                'accgroup_cd' => 'GRPACC00',
                'account_nm' => 'PENDAFTARAN',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            4 => 
            array (
                'account_cd' => 'AC099',
                'accgroup_cd' => 'GRPACC00',
                'account_nm' => 'BIAYA KARTU KREDIT',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            5 => 
            array (
                'account_cd' => 'AC100',
                'accgroup_cd' => NULL,
                'account_nm' => 'RAWAT JALAN',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            6 => 
            array (
                'account_cd' => 'AC101',
                'accgroup_cd' => 'GRPACC01',
                'account_nm' => 'DOKTER UMUM',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            7 => 
            array (
                'account_cd' => 'AC102',
                'accgroup_cd' => 'GRPACC01',
                'account_nm' => 'DOKTER SPESIALIS',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            8 => 
            array (
                'account_cd' => 'AC104',
                'accgroup_cd' => 'GRPACC07',
                'account_nm' => 'PERAWAT',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            9 => 
            array (
                'account_cd' => 'AC105',
                'accgroup_cd' => 'GRPACC07',
                'account_nm' => 'BIDAN',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            10 => 
            array (
                'account_cd' => 'AC106',
                'accgroup_cd' => 'GRPACC07',
                'account_nm' => 'AHLI GIZI',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            11 => 
            array (
                'account_cd' => 'AC107',
                'accgroup_cd' => 'GRPACC07',
                'account_nm' => 'FISIOTERAPIS',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            12 => 
            array (
                'account_cd' => 'AC110',
                'accgroup_cd' => 'GRPACC07',
                'account_nm' => 'APOTEKER',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            13 => 
            array (
                'account_cd' => 'AC111',
                'accgroup_cd' => 'GRPACC07',
                'account_nm' => 'PSIKOLOG',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            14 => 
            array (
                'account_cd' => 'AC120',
                'accgroup_cd' => 'GRPACC07',
                'account_nm' => 'PARAMEDIS',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            15 => 
            array (
                'account_cd' => 'AC201',
                'accgroup_cd' => 'GRPACC02',
                'account_nm' => 'AKOMODASI',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            16 => 
            array (
                'account_cd' => 'AC210',
                'accgroup_cd' => 'GRPACC04',
                'account_nm' => 'LABORATORIUM',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            17 => 
            array (
                'account_cd' => 'AC220',
                'accgroup_cd' => 'GRPACC05',
                'account_nm' => 'RADIOLOGI',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            18 => 
            array (
                'account_cd' => 'AC221',
                'accgroup_cd' => 'GRPACC05',
                'account_nm' => 'USG',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            19 => 
            array (
                'account_cd' => 'AC222',
                'accgroup_cd' => 'GRPACC05',
                'account_nm' => 'EKG',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            20 => 
            array (
                'account_cd' => 'AC230',
                'accgroup_cd' => 'GRPACC06',
                'account_nm' => 'TINDAKAN MEDIS',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            21 => 
            array (
                'account_cd' => 'AC241',
                'accgroup_cd' => NULL,
                'account_nm' => 'RUANG ICU',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            22 => 
            array (
                'account_cd' => 'AC242',
                'accgroup_cd' => NULL,
                'account_nm' => 'RUANG OPERASI',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            23 => 
            array (
                'account_cd' => 'AC301',
                'accgroup_cd' => 'GRPACC03',
                'account_nm' => 'OBAT',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            24 => 
            array (
                'account_cd' => 'AC302',
                'accgroup_cd' => 'GRPACC03',
                'account_nm' => 'BHP',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            25 => 
            array (
                'account_cd' => 'AC310',
                'accgroup_cd' => 'GRPACC03',
                'account_nm' => 'PENJUALAN BEBAS',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            26 => 
            array (
                'account_cd' => 'AC801',
                'accgroup_cd' => 'GRPACC08',
                'account_nm' => 'PENDAPATAN LAIN',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            27 => 
            array (
                'account_cd' => 'AC901',
                'accgroup_cd' => 'GRPACC00',
                'account_nm' => 'PPN',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
            28 => 
            array (
                'account_cd' => 'AC999',
                'accgroup_cd' => 'GRPACC99',
                'account_nm' => 'LAIN-LAIN',
                'default_amount' => NULL,
                'order_no' => NULL,
                'print_single_st' => NULL,
                'modi_id' => NULL,
            ),
        ));

        
    }
}