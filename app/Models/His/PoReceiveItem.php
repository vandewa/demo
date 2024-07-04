<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PoReceiveItem
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string ri_no
 * @property string supplier_cd
 * @property string principal_cd
 * @property string invoice_no
 * @property integer trx_year
 * @property decimal trx_month
 * @property string|\Carbon\Carbon trx_date
 * @property string currency_cd
 * @property decimal rate
 * @property decimal total_price
 * @property decimal total_discount
 * @property decimal total_amount
 * @property string vat_tp
 * @property decimal percent_ppn
 * @property decimal ppn
 * @property string entry_by
 * @property string|\Carbon\Carbon entry_date
 * @property string note
 * @property string ri_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoReceiveItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_receive_item';

    protected $guarded = [''];





    protected $primaryKey = 'ri_cd';

    public $fillable = [
        'ri_no',
        'supplier_cd',
        'principal_cd',
        'invoice_no',
        'trx_year',
        'trx_month',
        'trx_date',
        'currency_cd',
        'rate',
        'total_price',
        'total_discount',
        'total_amount',
        'vat_tp',
        'percent_ppn',
        'ppn',
        'entry_by',
        'entry_date',
        'note',
        'ri_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ri_cd' => 'string',
        'ri_no' => 'string',
        'supplier_cd' => 'string',
        'principal_cd' => 'string',
        'invoice_no' => 'string',
        'trx_year' => 'integer',
        'currency_cd' => 'string',
        'vat_tp' => 'string',
        'entry_by' => 'string',
        'note' => 'string',
        'ri_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'ri_no',
        'supplier_cd',
        'principal_cd',
        'invoice_no',
        'trx_year',
        'trx_month',
        'trx_date',
        'currency_cd',
        'rate',
        'total_price',
        'total_discount',
        'total_amount',
        'vat_tp',
        'percent_ppn',
        'ppn',
        'entry_by',
        'entry_date',
        'note',
        'ri_st',
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

    public static function getDataSupplier($search)
    {
        $query = DB::table('po_supplier')
                ->select('supplier_cd','supplier_nm')
                ->where('supplier_nm', 'ilike', "%$search%")
                ->get();
        return $query;
    }

    public static function getDataPrincipal($search)
    {
        $query = DB::table('po_principal')
                ->select('principal_cd','principal_nm')
                ->where('principal_nm', 'ilike', "%$search%")
                ->get();
        return $query;
    }

    public static function getDataPoNumber($search)
    {
        $query = DB::table('po_purchase_order')
                ->select('po_cd')
                ->where('po_cd', 'ilike', "%$search%")
                ->get();
        return $query;
    }

    public static function getItemcd($search)
    {
        $query = DB::table('inv_item_master')
                ->select('item_cd','item_nm')
                ->where('item_cd', 'ilike', "%$search%")
                ->get();
        return $query;
    }

    public static function getUnitcd($search)
    {
        $query = DB::table('inv_unit')
                ->select('unit_cd','unit_nm')
                ->where('unit_nm', 'ilike', "%$search%")
                ->get();
        return $query;
    }
    public static function cekHeader($po_cd)
    {
        $query = DB::table('po_purchase_order')
                ->select('po_cd')
                ->where('po_cd',$po_cd)
                ->get();
        return $query;
    }

    public static function getDetailReceive($param)
    {
        $query = DB::table('po_po_detail')
                ->select('po_po_detail.po_cd','po_po_detail.item_cd','inv_item_master.item_nm','po_po_detail.unit_cd','po_po_detail.quantity','po_po_detail.unit_price','po_po_detail.trx_amount')
                ->join('inv_item_master','po_po_detail.item_cd','inv_item_master.item_cd')
                ->where('po_cd',$param)
                ->get();
        return $query;
    }
}
