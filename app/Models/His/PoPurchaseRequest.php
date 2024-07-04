<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoPurchaseRequest
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string pr_no
 * @property string supplier_cd
 * @property integer trx_year
 * @property decimal trx_month
 * @property string|\Carbon\Carbon trx_date
 * @property string entry_by
 * @property string|\Carbon\Carbon entry_date
 * @property string note
 * @property string pr_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoPurchaseRequest extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_purchase_request';






    protected $primaryKey = 'pr_cd';

    public $fillable = [
        'pr_no',
        'supplier_cd',
        'trx_year',
        'trx_month',
        'trx_date',
        'entry_by',
        'entry_date',
        'note',
        'pr_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pr_cd' => 'string',
        'pr_no' => 'string',
        'supplier_cd' => 'string',
        'trx_year' => 'integer',
        'entry_by' => 'string',
        'note' => 'string',
        'pr_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pr_no',
        'supplier_cd',
        'trx_year',
        'trx_month',
        'trx_date',
        'entry_by',
        'entry_date',
        'note',
        'pr_st',
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

    public function getSupplier()
    {
      return $this->hasOne('App\Models\His\PoSupplier','supplier_cd','supplier_cd');
    }
}
