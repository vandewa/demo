<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxTindakanParamedis
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property string treatment_cd
 * @property string spesialis_cd
 * @property string paramedis_tp
 * @property string paramedis_role
 * @property integer total_person
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxTindakanParamedis extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_tindakan_paramedis';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'treatment_cd',
        'spesialis_cd',
        'paramedis_tp',
        'paramedis_role',
        'total_person',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'treatment_cd' => 'string',
        'spesialis_cd' => 'string',
        'paramedis_tp' => 'string',
        'paramedis_role' => 'string',
        'total_person' => 'integer',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'treatment_cd',
        'spesialis_cd',
        'paramedis_tp',
        'paramedis_role',
        'total_person',
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
