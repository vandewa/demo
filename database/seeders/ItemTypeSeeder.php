<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\InvItemType;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['type_cd' => 'obat', 'type_nm' => 'Obat'],
            ['type_cd' => 'bhp', 'type_nm' => 'BHP'],
            ['type_cd' => 'alkes', 'type_nm' => 'Alat Kesehatan'],
        ];

        foreach ($data as $datum){
            InvItemType::create($datum);
        }
    }
}
