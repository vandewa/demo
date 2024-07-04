<?php

namespace App\Imports;

use App\Models\Demo\HasilPsikotes;
use Maatwebsite\Excel\Concerns\ToModel;

class HasilPsikotestImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new HasilPsikotes([
            'email'     => $row[0],
            'psikotes'    => $row[1],
            'logika' => $row[2],
            'tiu' => $row[3],
            'skolastik' => $row[4],
        ]);
    }
}
