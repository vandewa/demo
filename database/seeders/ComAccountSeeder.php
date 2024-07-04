<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\ComAccount;

class ComAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["account_cd" => "AC000", "accgroup_cd" => "GRPACC00", "account_nm" => "ADMINISTRASI"],
            ["account_cd" => "AC001", "accgroup_cd" => "GRPACC00", "account_nm" => "ADMINISTRASI RAWAT JALAN"],
            ["account_cd" => "AC002", "accgroup_cd" => "GRPACC00", "account_nm" => "ADMINISTRASI RAWAT INAP"],
            ["account_cd" => "AC003", "accgroup_cd" => "GRPACC00", "account_nm" => "PENDAFTARAN"],
            ["account_cd" => "AC099", "accgroup_cd" => "GRPACC00", "account_nm" => "BIAYA KARTU KREDIT"],
            ["account_cd" => "AC101", "accgroup_cd" => "GRPACC01", "account_nm" => "DOKTER UMUM"],
            ["account_cd" => "AC102", "accgroup_cd" => "GRPACC01", "account_nm" => "DOKTER SPESIALIS"],
            ["account_cd" => "AC104", "accgroup_cd" => "GRPACC07", "account_nm" => "PERAWAT"],
            ["account_cd" => "AC105", "accgroup_cd" => "GRPACC07", "account_nm" => "BIDAN"],
            ["account_cd" => "AC106", "accgroup_cd" => "GRPACC07", "account_nm" => "AHLI GIZI"],
            ["account_cd" => "AC107", "accgroup_cd" => "GRPACC07", "account_nm" => "FISIOTERAPIS"],
            ["account_cd" => "AC110", "accgroup_cd" => "GRPACC07", "account_nm" => "APOTEKER"],
            ["account_cd" => "AC111", "accgroup_cd" => "GRPACC07", "account_nm" => "PSIKOLOG"],
            ["account_cd" => "AC120", "accgroup_cd" => "GRPACC07", "account_nm" => "PARAMEDIS"],
            ["account_cd" => "AC201", "accgroup_cd" => "GRPACC02", "account_nm" => "AKOMODASI"],
            ["account_cd" => "AC210", "accgroup_cd" => "GRPACC04", "account_nm" => "LABORATORIUM"],
            ["account_cd" => "AC220", "accgroup_cd" => "GRPACC05", "account_nm" => "RADIOLOGI"],
            ["account_cd" => "AC221", "accgroup_cd" => "GRPACC05", "account_nm" => "USG"],
            ["account_cd" => "AC222", "accgroup_cd" => "GRPACC05", "account_nm" => "EKG"],
            ["account_cd" => "AC230", "accgroup_cd" => "GRPACC06", "account_nm" => "TINDAKAN MEDIS"],
            ["account_cd" => "AC301", "accgroup_cd" => "GRPACC03", "account_nm" => "OBAT"],
            ["account_cd" => "AC310", "accgroup_cd" => "GRPACC03", "account_nm" => "PENJUALAN BEBAS"],
            ["account_cd" => "AC801", "accgroup_cd" => "GRPACC08", "account_nm" => "PENDAPATAN LAIN"],
            ["account_cd" => "AC901", "accgroup_cd" => "GRPACC00", "account_nm" => "PPN"],
            ["account_cd" => "AC999", "accgroup_cd" => "GRPACC99", "account_nm" => "LAIN-LAIN"],
            ["account_cd" => "AC302", "accgroup_cd" => "GRPACC03", "account_nm" => "BMHP"],
            ["account_cd" => "AC231", "accgroup_cd" => "GRPACC09", "account_nm" => "TINDAKAN KEPERAWATAN"],
            ["account_cd" => "AC232", "accgroup_cd" => "GRPACC10", "account_nm" => "KONSULTASI DAN VISITE DOKTER"],
            ["account_cd" => "AC233", "accgroup_cd" => "GRPACC11", "account_nm" => "PENUNJANG"],
            ["account_cd" => "AC234", "accgroup_cd" => "GRPACC12", "account_nm" => "ASUHAN KEPERAWATAN"],
        ];

        foreach ($data as $datum){
            ComAccount::create($datum);
        }
    }
}
