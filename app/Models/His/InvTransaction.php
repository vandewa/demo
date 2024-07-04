<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvTransaction
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string trx_no
 * @property integer trx_year
 * @property decimal trx_month
 * @property string pos_cd
 * @property string inv_trx_cd
 * @property string vendor_cd
 * @property string|\Carbon\Carbon trx_date
 * @property string entry_by
 * @property string|\Carbon\Carbon entry_date
 * @property string note
 * @property string inv_trx_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvTransaction extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_transaction';






    protected $primaryKey = 'trx_cd';

    public $fillable = [
        'trx_no',
        'trx_year',
        'trx_month',
        'pos_cd',
        'inv_trx_cd',
        'vendor_cd',
        'trx_date',
        'entry_by',
        'entry_date',
        'note',
        'inv_trx_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'trx_cd' => 'string',
        'trx_no' => 'string',
        'trx_year' => 'integer',
        'pos_cd' => 'string',
        'inv_trx_cd' => 'string',
        'vendor_cd' => 'string',
        'entry_by' => 'string',
        'note' => 'string',
        'inv_trx_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'trx_no',
        'trx_year',
        'trx_month',
        'pos_cd',
        'inv_trx_cd',
        'vendor_cd',
        'trx_date',
        'entry_by',
        'entry_date',
        'note',
        'inv_trx_st',
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
