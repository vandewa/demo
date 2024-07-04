<?php

namespace App\Models\Demo;

use App\Models\His\ComCode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataKeluarga extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jenisKelamin()
    {
        return $this->belongsTo(ComCode::class, 'gender_tp');
    }

    public function pendidikannya()
    {
        return $this->belongsTo(ComCode::class, 'education_tp');
    }
}
