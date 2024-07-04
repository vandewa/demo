<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxTariftpItem
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property bigInteger tariftp_no
 * @property string item_nm
 * @property string tarif_tp
 * @property integer trx_tarif_seqno
 * @property decimal tarif_item
 * @property decimal quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxTariftpItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_tariftp_item';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'tariftp_no',
        'item_nm',
        'tarif_tp',
        'trx_tarif_seqno',
        'tarif_item',
        'quantity',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_nm' => 'string',
        'tarif_tp' => 'string',
        'trx_tarif_seqno' => 'integer',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'tariftp_no',
        'item_nm',
        'tarif_tp',
        'trx_tarif_seqno',
        'tarif_item',
        'quantity',
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
