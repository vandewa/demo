<?php

namespace App\Models\Demo;

use App\Models\His\ComCode;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function nama()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status()
    {
        return $this->belongsTo(ComCode::class, 'status_tiket_tp');
    }
}
