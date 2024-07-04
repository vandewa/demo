<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ComPaymentMethodTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('com_payment_method')->delete();
        
        \DB::table('com_payment_method')->insert(array (
            0 => 
            array (
                'payment_cd' => 'BCACARD',
                'payment_nm' => 'KARTU KREDIT BCA',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            1 => 
            array (
                'payment_cd' => 'BNICARD',
                'payment_nm' => 'KARTU KREDIT BNI',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            2 => 
            array (
                'payment_cd' => 'BRICARD',
                'payment_nm' => 'KARTU KREDIT BRI',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            3 => 
            array (
                'payment_cd' => 'DEBITBCA',
                'payment_nm' => 'DEBIT BCA',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            4 => 
            array (
                'payment_cd' => 'DEBITBNI',
                'payment_nm' => 'DEBIT BNI',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            5 => 
            array (
                'payment_cd' => 'DEBITBRI',
                'payment_nm' => 'DEBIT BRI',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            6 => 
            array (
                'payment_cd' => 'DEBITMANDIRI',
                'payment_nm' => 'DEBIT MANDIRI',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            7 => 
            array (
                'payment_cd' => 'DEBITNIAGA',
                'payment_nm' => 'DEBIT NIAGA',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            8 => 
            array (
                'payment_cd' => 'DEBITPERMATA',
                'payment_nm' => 'DEBIT PERMATA',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            9 => 
            array (
                'payment_cd' => 'MANDIRICARD',
                'payment_nm' => 'KARTU KREDIT MANDIRI',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            10 => 
            array (
                'payment_cd' => 'NIAGACARD',
                'payment_nm' => 'KARTU KREDIT NIAGA',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
            11 => 
            array (
                'payment_cd' => 'PERMATACARD',
                'payment_nm' => 'KARTU KREDIT PERMATA',
                'bank_cd' => NULL,
                'persen_charge' => '0.00',
                'modi_id' => 'admin',
            ),
        ));

        
    }
}