<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxBankdarahTransfusi
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property bigInteger stock_cd
 * @property string medical_cd
 * @property string|\Carbon\Carbon datetime_trx
 * @property string dr_cd
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxBankdarahTransfusi extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_bankdarah_transfusi';






    protected $primaryKey = 'transfusi_seq_no';

    public $fillable = [
        'stock_cd',
        'medical_cd',
        'datetime_trx',
        'dr_cd',
        'note',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medical_cd' => 'string',
        'dr_cd' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'stock_cd',
        'medical_cd',
        'datetime_trx',
        'dr_cd',
        'note',
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
