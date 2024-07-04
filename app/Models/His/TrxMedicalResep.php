<?php

namespace App\Models\His;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxMedicalResep extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "trx_medical_resep";

    protected $primaryKey = 'medical_resep_seqno';

    public function resepData() {
        return $this->hasMany(TrxResepData::class, 'medical_resep_seqno');
    }

}
