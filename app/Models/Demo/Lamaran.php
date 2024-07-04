<?php

namespace App\Models\Demo;

use App\Livewire\Demo\Admin\Tes;
use App\Livewire\Demo\Admin\Wawancara;
use App\Models\Magang;
use App\Models\TestFisik;
use App\Models\User;
use App\Models\Wawancara1;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mcu;
use App\Models\Pendidikan;

class Lamaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tahapan() {
        return $this->belongsTo(Tahapan::class, 'tahapan_id', 'no');
    }

    public function user()  {
        return $this->belongsTo(User::class);
    }

    public function tes()  {
        return $this->hasOne(TestFisik::class, 'lamaran_id');
    }

    public function wawancara()  {
        return $this->hasOne(Wawancara1::class, 'lamaran_id');
    }
    public function mcu()  {
        return $this->hasOne(Mcu::class, 'lamaran_id');
    }
    public function pendidikan()  {
        return $this->hasOne(Pendidikan::class, 'lamaran_id');
    }
    public function magang()  {
        return $this->hasOne(Magang::class, 'lamaran_id');
    }

    public function pembayaran()  {
        return $this->hasMany(Tagihan::class, 'lamaran_id');
    }

    public function scopeCari($filter, $value)  {
        if($value){
            return $this->whereHas('user', function($a) use($value){
                $a->where('name', 'ilike', "%$value%");
            });
        }
    }
}
