<?php

namespace App\Models\Demo;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function layanan() {
       return $this->belongsTo(Layanan::class, 'layanan_id');
    }

    public function tertagih()  {
        return $this->belongsTo(User::class, 'user_id');
    }
}
