<?php

namespace Database\Seeders;

use App\Models\Demo\Tahapan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TahapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('tahapans')->truncate();

        Tahapan::create([
            'no' => 1,
            'name' => 'Seleksi Berkas',
        ]);
        Tahapan::create([
            'no' => 2,
            'name' => 'Psikotes & Test Fisik',
        ]);
        Tahapan::create([
            'no' => 3,
            'name' => 'Wawancara Pra Pelatihan',
        ]);

        Tahapan::create([
            'no' => 4,
            'name' => 'Pendidikan',
        ]);
        Tahapan::create([
            'no' => 5,
            'name' => 'Wawancara User',
        ]);
        Tahapan::create([
            'no' => 6,
            'name' => 'MCU',
        ]);

        Tahapan::create([
            'no' => 7,
            'name' => 'Pengurusan Berkas Keberangkatan',
        ]);
        Tahapan::create([
            'no' => 8,
            'name' => 'Keberangkatan',
        ]);
        Tahapan::create([
            'no' => 9,
            'name' => 'Monitoring',
        ]);
    }
}
