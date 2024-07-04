<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoRetur
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string retur_no
 * @property string supplier_cd
 * @property integer trx_year
 * @property decimal trx_month
 * @property string|\Carbon\Carbon trx_date
 * @property string currency_cd
 * @property decimal rate
 * @property decimal total_price
 * @property decimal total_amount
 * @property string vat_tp
 * @property decimal percent_ppn
 * @property decimal ppn
 * @property string|\Carbon\Carbon retur_datetime
 * @property string note
 * @property string entry_by
 * @property string|\Carbon\Carbon entry_date
 * @property string retur_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoRetur extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_retur';






    protected $primaryKey = 'retur_cd';

    public $fillable = [
        'retur_no',
        'supplier_cd',
        'trx_year',
        'trx_month',
        'trx_date',
        'currency_cd',
        'rate',
        'total_price',
        'total_amount',
        'vat_tp',
        'percent_ppn',
        'ppn',
        'retur_datetime',
        'note',
        'entry_by',
        'entry_date',
        'retur_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'retur_cd' => 'string',
        'retur_no' => 'string',
        'supplier_cd' => 'string',
        'trx_year' => 'integer',
        'currency_cd' => 'string',
        'vat_tp' => 'string',
        'note' => 'string',
        'entry_by' => 'string',
        'retur_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'retur_no',
        'supplier_cd',
        'trx_year',
        'trx_month',
        'trx_date',
        'currency_cd',
        'rate',
        'total_price',
        'total_amount',
        'vat_tp',
        'percent_ppn',
        'ppn',
        'retur_datetime',
        'note',
        'entry_by',
        'entry_date',
        'retur_st',
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
