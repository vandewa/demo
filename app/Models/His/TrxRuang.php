<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxRuang
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string kelas_cd
 * @property string bangsal_cd
 * @property string ruang_nm
 * @property bigInteger ruang_st
 * @property string ruang_tp
 * @property string kelas_default
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string kamar_cd
 * @property string kondisi_st
 */
class TrxRuang extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public $table = 'trx_ruang';
    public $incrementing = false;
    protected $primaryKey = 'ruang_cd';

    protected $guarded = [];
    public $keyType = 'string';


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ruang_cd' => 'string',
        'kelas_cd' => 'string',
        'bangsal_cd' => 'string',
        'ruang_nm' => 'string',
        'ruang_tp' => 'string',
        'kelas_default' => 'string',
        'modi_id' => 'string',
        'kamar_cd' => 'string',
        'kondisi_st' => 'string'
    ];

    protected static $logAttributes = [
        'kelas_cd',
        'bangsal_cd',
        'ruang_nm',
        'ruang_st',
        'ruang_tp',
        'kelas_default',
        'modi_id',
        'modi_datetime',
        'kamar_cd',
        'kondisi_st'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function bangsal()
    {
        return $this->belongsTo(TrxBangsal::class, 'bangsal_cd');
    }

    public function kamar()
    {
        return $this->belongsTo(TrxKamar::class, 'kamar_cd');
    }

    public function kelas()
    {
        return $this->belongsTo(TrxKelas::class, 'kelas_cd');
    }

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('ruang
            _cd', 'ilike', "%$s%")->orWhere('ruang
            _nm', 'ilike', "%$s%");
        }
    }


}