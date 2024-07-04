<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxResepData
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property bigInteger medical_resep_seqno
 * @property string item_cd
 * @property string data_nm
 * @property decimal quantity
 * @property decimal price
 * @property string resep_tp
 * @property string info_01
 * @property string info_02
 * @property decimal num_01
 * @property decimal num_02
 * @property string payment_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string satuan_paket
 * @property date expired_date
 * @property string keterangan
 * @property integer iter
 * @property integer iter_count
 * @property decimal amount
 * @property string trans_id
 */
class TrxResepData extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_resep_data';






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
        'modi_datetime',
        'satuan_paket',
        'expired_date',
        'keterangan',
        'iter',
        'iter_count',
        'amount',
        'trans_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_cd' => 'string',
        'data_nm' => 'string',
        'resep_tp' => 'string',
        'info_01' => 'string',
        'info_02' => 'string',
        'payment_st' => 'string',
        'modi_id' => 'string',
        'satuan_paket' => 'string',
        'expired_date' => 'date',
        'keterangan' => 'string',
        'iter' => 'integer',
        'iter_count' => 'integer',
        'trans_id' => 'string'
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
        'modi_datetime',
        'satuan_paket',
        'expired_date',
        'keterangan',
        'iter',
        'iter_count',
        'amount',
        'trans_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
