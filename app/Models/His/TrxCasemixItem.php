<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCasemixItem
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property bigInteger casemix_no
 * @property string data_cd
 * @property string data_nm
 * @property string tarif_tp
 * @property decimal quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxCasemixItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_casemix_item';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'casemix_no',
        'data_cd',
        'data_nm',
        'tarif_tp',
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
        'data_cd' => 'string',
        'data_nm' => 'string',
        'tarif_tp' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'casemix_no',
        'data_cd',
        'data_nm',
        'tarif_tp',
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
