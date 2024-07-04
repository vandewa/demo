<?php

namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function satuan(){
    //     return $this->belongsTo(InvUnit::class, 'unit_cd');
    // }
}
