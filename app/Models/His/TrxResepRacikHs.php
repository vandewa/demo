<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxResepRacikHs
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property bigInteger resep_seqno
 * @property string item_cd
 * @property decimal quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string trans_id
 */
class TrxResepRacikHs extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_resep_racik_hs';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'resep_seqno',
        'item_cd',
        'quantity',
        'modi_id',
        'modi_datetime',
        'trans_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_cd' => 'string',
        'modi_id' => 'string',
        'trans_id' => 'string'
    ];

    protected static $logAttributes = [
        'resep_seqno',
        'item_cd',
        'quantity',
        'modi_id',
        'modi_datetime',
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
