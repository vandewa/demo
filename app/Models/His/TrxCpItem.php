<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCpItem
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string cp_cd
 * @property integer day_no
 * @property string data_cd
 * @property string data_nm
 * @property string tarif_tp
 * @property decimal quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string tab_act
 */
class TrxCpItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_cp_item';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'cp_cd',
        'day_no',
        'data_cd',
        'data_nm',
        'tarif_tp',
        'quantity',
        'modi_id',
        'modi_datetime',
        'tab_act'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cp_cd' => 'string',
        'day_no' => 'integer',
        'data_cd' => 'string',
        'data_nm' => 'string',
        'tarif_tp' => 'string',
        'modi_id' => 'string',
        'tab_act' => 'string'
    ];

    protected static $logAttributes = [
        'cp_cd',
        'day_no',
        'data_cd',
        'data_nm',
        'tarif_tp',
        'quantity',
        'modi_id',
        'modi_datetime',
        'tab_act'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
