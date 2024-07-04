<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxPaketItem
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string paket_cd
 * @property string item_nm
 * @property string tarif_tp
 * @property integer trx_tarif_seqno
 * @property decimal tarif_paket
 * @property decimal tarif_trx
 * @property decimal quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxPaketItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_paket_item';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'paket_cd',
        'item_nm',
        'tarif_tp',
        'trx_tarif_seqno',
        'tarif_paket',
        'tarif_trx',
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
        'paket_cd' => 'string',
        'item_nm' => 'string',
        'tarif_tp' => 'string',
        'trx_tarif_seqno' => 'integer',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'paket_cd',
        'item_nm',
        'tarif_tp',
        'trx_tarif_seqno',
        'tarif_paket',
        'tarif_trx',
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
