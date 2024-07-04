<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxDokterProperty
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string dr_cd
 * @property string|\Carbon\Carbon datetime
 * @property string dr_property_cd
 * @property string dr_property_value
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property time time_start
 * @property time time_end
 * @property bigInteger jadwal_seqno
 */
class TrxDokterProperty extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_dokter_property';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'dr_cd',
        'datetime',
        'dr_property_cd',
        'dr_property_value',
        'modi_id',
        'modi_datetime',
        'time_start',
        'time_end',
        'jadwal_seqno'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dr_cd' => 'string',
        'dr_property_cd' => 'string',
        'dr_property_value' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'dr_cd',
        'datetime',
        'dr_property_cd',
        'dr_property_value',
        'modi_id',
        'modi_datetime',
        'time_start',
        'time_end',
        'jadwal_seqno'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
