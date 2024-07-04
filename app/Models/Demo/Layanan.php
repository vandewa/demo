<?php

namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
