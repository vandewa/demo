<?php

namespace App\Models\Demo;

use App\Models\His\ComCode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiKeuangan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jenisKeuangan() {
        return $this->belongsTo(ComCode::class, 'pengeluaran_tp');
    }
}
