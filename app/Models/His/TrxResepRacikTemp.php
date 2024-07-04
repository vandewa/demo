<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxResepRacikTemp
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property bigInteger resep_seqno
 * @property string item_cd
 * @property float quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxResepRacikTemp extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_resep_racik_temp';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'resep_seqno',
        'item_cd',
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
        'seq_no' => 'integer',
        'item_cd' => 'string',
        'quantity' => 'float',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'resep_seqno',
        'item_cd',
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
