<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxResepDataHs
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
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string satuan_paket
 * @property date expired_date
 * @property string trans_id
 */
class TrxResepDataHs extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_resep_data_hs';






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
        'modi_id',
        'modi_datetime',
        'satuan_paket',
        'expired_date',
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
        'modi_id' => 'string',
        'satuan_paket' => 'string',
        'expired_date' => 'date',
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
        'modi_id',
        'modi_datetime',
        'satuan_paket',
        'expired_date',
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
