<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestFisik extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()  {
        return $this->belongsTo(User::class);
    }

    public function scopeCari($filter, $value)  {
        if($value){
            return $this->whereHas('user', function($a) use($value){
                $a->where('name', 'ilike', "%$value%");
            });
        }
    }

}
