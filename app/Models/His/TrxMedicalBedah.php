<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalBedah
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string treatment_cd
 * @property string|\Carbon\Carbon datetime_start
 * @property string|\Carbon\Carbon datetime_end
 * @property string dr_cd
 * @property string note
 * @property string bedah_st
 * @property string medunit_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string pasien_cd
 * @property string ruang
 */
class TrxMedicalBedah extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_bedah';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_cd',
        'treatment_cd',
        'datetime_start',
        'datetime_end',
        'dr_cd',
        'note',
        'bedah_st',
        'medunit_cd',
        'modi_id',
        'modi_datetime',
        'pasien_cd',
        'ruang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'treatment_cd' => 'string',
        'dr_cd' => 'string',
        'note' => 'string',
        'bedah_st' => 'string',
        'medunit_cd' => 'string',
        'modi_id' => 'string',
        'pasien_cd' => 'string',
        'ruang' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'treatment_cd',
        'datetime_start',
        'datetime_end',
        'dr_cd',
        'note',
        'bedah_st',
        'medunit_cd',
        'modi_id',
        'modi_datetime',
        'pasien_cd',
        'ruang'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
