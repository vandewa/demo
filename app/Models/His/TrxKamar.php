<?php

namespace App\Models\His;

use Illuminate\Database\Eloquent\Model;

class TrxKamar extends Model
{
    public $table = 'trx_kamar';
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'kamar_cd';
    public $keyType = 'string';

    protected $casts = [
        'kamar_cd' => 'string',
        'kamar_nm' => 'string',
        'ruang_st' => 'string',
        'modi_id' => 'string',
        'bangsal_cd' => 'string',
        'kelas_cd' => 'string'
    ];

    protected static $logAttributes = [
        'kamar_nm',
        'kamar_tp',
        'ruang_st',
        'modi_id',
        'bangsal_cd',
        'kelas_cd'
    ];


    public function ruang() // bed
    {
        return $this->hasMany(TrxRuang::class, 'kamar_cd');
    }
    public function bangsal() // bed
    {
        return $this->belongsTo(TrxBangsal::class, 'bangsal_cd');
    }
    public function kelas() // bed
    {
        return $this->belongsTo(TrxKelas::class, 'kelas_cd');
    }

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('kamar_cd', 'ilike', "%$s%")->orWhere('kamar_nm', 'ilike', "%$s%");
        }
    }
}