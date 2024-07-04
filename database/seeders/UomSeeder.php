<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\InvUnit;

class UomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['unit_cd' => 'CM','unit_nm' => 'Centi Meter'],
            ['unit_cd' => 'AMP','unit_nm' => 'Ampul'],
            ['unit_cd' => 'PCS','unit_nm' => 'PCS'],
            ['unit_cd' => 'M','unit_nm' => 'Meter'],
            ['unit_cd' => 'KG','unit_nm' => 'Kilogram'],
            ['unit_cd' => 'CPS','unit_nm' => 'Capsul'],
            ['unit_cd' => 'CC','unit_nm' => 'CC'],
            ['unit_cd' => 'MG','unit_nm' => 'Miligram'],
        ];

        foreach ($data as $datum){
            InvUnit::create($datum);
        }
    }
}
