<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxResepDataTemp
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property bigInteger medical_resep_seqno
 * @property string item_cd
 * @property string data_nm
 * @property float quantity
 * @property float price
 * @property string resep_tp
 * @property string info_01
 * @property string info_02
 * @property float num_01
 * @property float num_02
 * @property string payment_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxResepDataTemp extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_resep_data_temp';






    protected $primaryKey = 'resep_seqno';

    public $fillable = [
        'medical_resep_seqno',
        'item_cd',
        'data_nm',
        'quantity',
        'price',
        'resep_tp',
        'info_01',
        'info_02',
        'num_01',
        'num_02',
        'payment_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'resep_seqno' => 'integer',
        'item_cd' => 'string',
        'data_nm' => 'string',
        'quantity' => 'float',
        'price' => 'float',
        'resep_tp' => 'string',
        'info_01' => 'string',
        'info_02' => 'string',
        'num_01' => 'float',
        'num_02' => 'float',
        'payment_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_resep_seqno',
        'item_cd',
        'data_nm',
        'quantity',
        'price',
        'resep_tp',
        'info_01',
        'info_02',
        'num_01',
        'num_02',
        'payment_st',
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
