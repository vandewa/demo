<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxUnitmedisItem
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property string medunit_cd
 * @property string medicalunit_root
 * @property string medicalunit_nm
 * @property string root_st
 * @property string file_format
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxUnitmedisItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_unitmedis_item';
    public $incrementing = false;
    protected $primaryKey = 'medicalunit_cd';

    protected $guarded = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medicalunit_cd' => 'string',
        'medunit_cd' => 'string',
        'medicalunit_root' => 'string',
        'medicalunit_nm' => 'string',
        'root_st' => 'string',
        'file_format' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medunit_cd',
        'medicalunit_root',
        'medicalunit_nm',
        'root_st',
        'file_format',
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

    public function unitMedis()
    {
        return $this->belongsTo(TrxUnitMedis::class, 'medunit_cd');
    }




}
