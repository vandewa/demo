<?php

namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPsikotes extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'hasil_psikotes';
}
