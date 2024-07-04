<?php

namespace App\Models\Demo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPreviewKtpAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['ktp'])) ?? asset('notfound.jpg');
        return $devan;
    }

    public function getPreviewAktaAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['akta'])) ?? asset('notfound.jpg');
        return $devan;
    }

    public function getPreviewKkAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['kk'])) ?? asset('notfound.jpg');
        return $devan;
    }

    public function getPreviewMcuAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['mcu'])) ?? asset('notfound.jpg');
        return $devan;
    }

}
