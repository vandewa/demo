<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalAlkesHs
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string medical_cd
 * @property string pos_cd
 * @property string item_cd
 * @property decimal quantity
 * @property string dr_cd
 * @property string paramedis_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalAlkesHs extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medical_alkes_hs';
    public $primaryKey = 'medical_alkes_seqno';
    public $incrementing = false;
    public $timestamps = true;

    protected $guarded = [''];


    // protected $primaryKey = 'medical_alkes_seqno';

    public $fillable = [
        'medical_cd',
        'pos_cd',
        'item_cd',
        'quantity',
        'dr_cd',
        'paramedis_cd',
        'datetime_trx',
        'note',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'pos_cd' => 'string',
        'item_cd' => 'string',
        'dr_cd' => 'string',
        'paramedis_cd' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_cd',
        'pos_cd',
        'item_cd',
        'quantity',
        'dr_cd',
        'paramedis_cd',
        'datetime_trx',
        'note',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
