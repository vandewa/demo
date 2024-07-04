<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\ComAccountGroup;
class ComAccountGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["accgroup_cd" => "GRPACC00", "accgroup_nm" => "ADMINISTRASI"],
            ["accgroup_cd" => "GRPACC01", "accgroup_nm" => "DOKTER"],
            ["accgroup_cd" => "GRPACC02", "accgroup_nm" => "KAMAR"],
            ["accgroup_cd" => "GRPACC03", "accgroup_nm" => "FARMASI/LOGISTIK"],
            ["accgroup_cd" => "GRPACC04", "accgroup_nm" => "LABORATORIUM"],
            ["accgroup_cd" => "GRPACC05", "accgroup_nm" => "RADIOLOGI"],
            ["accgroup_cd" => "GRPACC06", "accgroup_nm" => "TINDAKAN MEDIS"],
            ["accgroup_cd" => "GRPACC07", "accgroup_nm" => "PARAMEDIS"],
            ["accgroup_cd" => "GRPACC08", "accgroup_nm" => "PENDAPATAN LAIN"],
            ["accgroup_cd" => "GRPACC99", "accgroup_nm" => "LAIN-LAIN"],
            ["accgroup_cd" => "GRPACC09", "accgroup_nm" => "TINDAKAN KEPERAWATAN"],
            ["accgroup_cd" => "GRPACC10", "accgroup_nm" => "KONSULTASI DAN VISITE DOKTER"],
            ["accgroup_cd" => "GRPACC11", "accgroup_nm" => "PENUNJANG"],
            ["accgroup_cd" => "GRPACC12", "accgroup_nm" => "ASUHAN KEPERAWATAN"],
        ];

        foreach ($data as $item){
            ComAccountGroup::create($item);
        }
    }
}
