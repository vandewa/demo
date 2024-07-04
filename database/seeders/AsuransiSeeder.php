<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\TrxInsurance;

class AsuransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            ["insurance_cd" => "JKN", "insurance_nm" => "BPJS"]
        ];

        foreach ($data as $item) {
            TrxInsurance::create($item);
        }
    }
}
