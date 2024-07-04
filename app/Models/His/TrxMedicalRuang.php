<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalRuang
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string ruang_cd
 * @property string|\Carbon\Carbon datetime_start
 * @property string|\Carbon\Carbon datetime_end
 * @property string kelas_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string medical_link_cd
 */
class TrxMedicalRuang extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_ruang';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'ruang_cd',
        'datetime_start',
        'datetime_end',
        'kelas_cd',
        'modi_id',
        'modi_datetime',
        'medical_link_cd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'ruang_cd' => 'string',
        'kelas_cd' => 'string',
        'modi_id' => 'string',
        'medical_link_cd' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'ruang_cd',
        'datetime_start',
        'datetime_end',
        'kelas_cd',
        'modi_id',
        'modi_datetime',
        'medical_link_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
