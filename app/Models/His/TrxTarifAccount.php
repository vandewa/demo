<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxTarifAccount
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string tarif_tp
 * @property string account_cd
 * @property string table_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxTarifAccount extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_tarif_account';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'tarif_tp',
        'account_cd',
        'table_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tarif_tp' => 'string',
        'account_cd' => 'string',
        'table_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'tarif_tp',
        'account_cd',
        'table_nm',
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
