<?php

namespace App\Models\His;
use App\User;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

/**
* Class PoPurchaseOrder
* @package App\Models\His
* @version August 23, 2017, 3:47 am UTC
*
* @property string po_no
* @property string supplier_cd
* @property string invoice_no
* @property integer trx_year
* @property decimal trx_month
* @property string|\Carbon\Carbon trx_date
* @property string top_cd
* @property string currency_cd
* @property decimal rate
* @property decimal total_price
* @property decimal total_amount
* @property string vat_tp
* @property decimal percent_ppn
* @property decimal ppn
* @property string delivery_address
* @property string|\Carbon\Carbon delivery_datetime
* @property string entry_by
* @property string|\Carbon\Carbon entry_date
* @property string note
* @property string po_st
* @property string modi_id
* @property string|\Carbon\Carbon modi_datetime
*/
class PoPurchaseOrder extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;


  public $table = 'po_purchase_order';

  protected $guarded = [''];





  protected $primaryKey = 'po_cd';

  public $fillable = [
    'po_no',
    'supplier_cd',
    'invoice_no',
    'trx_year',
    'trx_month',
    'trx_date',
    'top_cd',
    'currency_cd',
    'rate',
    'total_price',
    'total_amount',
    'vat_tp',
    'percent_ppn',
    'ppn',
    'delivery_address',
    'delivery_datetime',
    'entry_by',
    'entry_date',
    'note',
    'po_st',
    'modi_id',
    'modi_datetime'
  ];

  /**
  * The attributes that should be casted to native types.
  *
  * @var array
  */
  protected $casts = [
    'po_cd' => 'string',
    'po_no' => 'string',
    'supplier_cd' => 'string',
    'invoice_no' => 'string',
    'trx_year' => 'integer',
    'top_cd' => 'string',
    'currency_cd' => 'string',
    'vat_tp' => 'string',
    'delivery_address' => 'string',
    'entry_by' => 'string',
    'note' => 'string',
    'po_st' => 'string',
    'modi_id' => 'string'
  ];

  protected static $logAttributes = [
    'po_no',
    'supplier_cd',
    'invoice_no',
    'trx_year',
    'trx_month',
    'trx_date',
    'top_cd',
    'currency_cd',
    'rate',
    'total_price',
    'total_amount',
    'vat_tp',
    'percent_ppn',
    'ppn',
    'delivery_address',
    'delivery_datetime',
    'entry_by',
    'entry_date',
    'note',
    'po_st',
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

  public function scopeItemPo()
  {
    return DB::table('po_purchase_order as po')
    ->join('po_po_detail as pod','po.po_cd','pod.po_cd')
    ->join('inv_item_master as iim','iim.item_cd', 'pod.item_cd')
    ->select('po.po_cd', 'iim.item_cd', 'iim.item_nm', 'iim.unit_cd', 'pod.quantity', 'pod.unit_price', 'pod.trx_amount', DB::raw("to_char(trx_date,'dd-mm-yyyy') as trx_date"))
    ->where(DB::raw("coalesce(pod.pr_cd,'')"),DB::raw("''"));
  }

//  public function creator()
//  {
//      return $this->belongsTo(User::class, '')
//  }

}
