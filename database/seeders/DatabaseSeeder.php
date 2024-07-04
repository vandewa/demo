<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LaratrustSeeder::class);
        $this->call(ComCodeSeeder::class);
        $this->call(TahapanSeeder::class);
        // $this->call(NationSeeder::class);
        // $this->call(Icd10Seeder::class);
        // $this->call(ComAccountGroupSeeder::class);
        // $this->call(ComAccountSeeder::class);
        // $this->call(PosInventorySeeder::class);
        // $this->call(UomSeeder::class);
        // $this->call(ItemTypeSeeder::class);
        // $this->call(AsuransiSeeder::class);
        // $this->call(RegionSeeder::class);
        // $this->call(ComAccountGroupTableSeeder::class);
        // $this->call(ComAccountTableSeeder::class);
        // $this->call(ComPaymentMethodTableSeeder::class);
        // $this->call(ComShiftTableSeeder::class);
        // $this->call(TrxSpesialisTableSeeder::class);
        // $this->call(TrxTindakanTableSeeder::class);
        // $this->call(TrxUnitMedisTableSeeder::class);
        // $this->call(TrxUnitmedisItemTableSeeder::class);
        // $this->call(TrxDokterTableSeeder::class);
        // $this->call(TrxJadwalTableSeeder::class);
        // $this->call(TrxTarifGeneralTableSeeder::class);
        // $this->call(TrxTarifTindakanTableSeeder::class);
        // $this->call(TrxKelasTableSeeder::class);
        // $this->call(TrxTarifKelasTableSeeder::class);
    }
}
