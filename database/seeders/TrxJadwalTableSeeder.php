<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxJadwalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('trx_jadwal')->delete();

        DB::table('trx_jadwal')->insert(array (
            0 =>
            array (
                'seq_no' => 82,
                'dr_cd' => 'TIMDOKTER',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_03',
                'time_start' => '00:00:00',
                'time_end' => '23:59:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'TIMDOKTER',
                'max_pasien' => NULL,
            ),
            1 =>
            array (
                'seq_no' => 83,
                'dr_cd' => 'TIMDOKTER',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_04',
                'time_start' => '00:00:00',
                'time_end' => '23:59:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'TIMDOKTER',
                'max_pasien' => NULL,
            ),
            2 =>
            array (
                'seq_no' => 84,
                'dr_cd' => 'TIMDOKTER',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_05',
                'time_start' => '00:00:00',
                'time_end' => '23:59:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'TIMDOKTER',
                'max_pasien' => NULL,
            ),
            3 =>
            array (
                'seq_no' => 85,
                'dr_cd' => 'TIMDOKTER',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_06',
                'time_start' => '00:00:00',
                'time_end' => '23:59:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'TIMDOKTER',
                'max_pasien' => NULL,
            ),
            4 =>
            array (
                'seq_no' => 86,
                'dr_cd' => 'TIMDOKTER',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_07',
                'time_start' => '00:00:00',
                'time_end' => '23:59:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'TIMDOKTER',
                'max_pasien' => NULL,
            ),
            5 =>
            array (
                'seq_no' => 87,
                'dr_cd' => 'DR0005',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_01',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'DR0005',
                'max_pasien' => NULL,
            ),
            6 =>
            array (
                'seq_no' => 88,
                'dr_cd' => 'DR0005',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_02',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'DR0005',
                'max_pasien' => NULL,
            ),
            7 =>
            array (
                'seq_no' => 90,
                'dr_cd' => 'DR0005',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_04',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'DR0005',
                'max_pasien' => NULL,
            ),
            8 =>
            array (
                'seq_no' => 91,
                'dr_cd' => 'DR0005',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_05',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'DR0005',
                'max_pasien' => NULL,
            ),
            9 =>
            array (
                'seq_no' => 92,
                'dr_cd' => 'DR0005',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_06',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'DR0005',
                'max_pasien' => NULL,
            ),
            10 =>
            array (
                'seq_no' => 93,
                'dr_cd' => 'DR0005',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_07',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'DR0005',
                'max_pasien' => NULL,
            ),
            11 =>
            array (
                'seq_no' => 94,
                'dr_cd' => 'DR0004',
                'medunit_cd' => 'POLISPA',
                'day_tp' => 'DAY_TP_01',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'hexsys',
                'dr_pengganti' => 'DR0004',
                'max_pasien' => NULL,
            ),
            12 =>
            array (
                'seq_no' => 89,
                'dr_cd' => 'DR0005',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_03',
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'admin',
                'dr_pengganti' => 'DR0005',
                'max_pasien' => NULL,
            ),
            13 =>
            array (
                'seq_no' => 80,
                'dr_cd' => 'DR0003',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_01',
                'time_start' => '00:00:00',
                'time_end' => '23:59:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'admin',
                'dr_pengganti' => 'TIMDOKTER',
                'max_pasien' => 12,
            ),
            14 =>
            array (
                'seq_no' => 95,
                'dr_cd' => 'DR0001',
                'medunit_cd' => 'POLIGIGI',
                'day_tp' => 'DAY_TP_03',
                'time_start' => '06:00:00',
                'time_end' => '16:00:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'admin',
                'dr_pengganti' => 'DR0001',
                'max_pasien' => NULL,
            ),
            15 =>
            array (
                'seq_no' => 81,
                'dr_cd' => 'TIMDOKTER',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_02',
                'time_start' => '00:00:00',
                'time_end' => '23:59:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'admin',
                'dr_pengganti' => 'DR0003',
                'max_pasien' => NULL,
            ),
            16 =>
            array (
                'seq_no' => 96,
                'dr_cd' => 'TIMDOKTER',
                'medunit_cd' => 'POLISPD',
                'day_tp' => 'DAY_TP_04',
                'time_start' => '13:00:00',
                'time_end' => '17:30:00',
                'note' => '',
                'rs_cd' => NULL,
                'modi_id' => 'admin',
                'dr_pengganti' => 'TIMDOKTER',
                'max_pasien' => NULL,
            ),
        ));


    }
}
