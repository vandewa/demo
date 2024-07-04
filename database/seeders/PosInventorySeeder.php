<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\InvPosInventory;

class PosInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['pos_cd' => 'GDG_01', 'pos_nm' => 'Gudang Utama']
        ];

        foreach ($data as $datum){
            InvPosInventory::create($datum);
        }
    }
}
