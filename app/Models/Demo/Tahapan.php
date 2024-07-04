<?php

namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahapan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function lamaran()
    {
        return $this->hasMany(Lamaran::class, 'tahapan_id');
    }
}
