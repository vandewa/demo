<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreAssets
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string uuid
 * @property string asset_code
 * @property string asset_desc
 * @property string asset_group
 * @property integer asset_level
 * @property string asset_type
 * @property bigInteger kode_dep
 * @property string account_code
 * @property string ext_name
 * @property string alias_name
 * @property bigInteger acq_cost
 * @property string|\Carbon\Carbon acq_date
 * @property string custodian
 * @property string manufacturer
 * @property float quantity
 * @property string|\Carbon\Carbon last_maint_date
 * @property string|\Carbon\Carbon date_added
 * @property smallInteger status
 * @property string currency_id
 * @property string|\Carbon\Carbon transfer_date
 * @property integer transfer_event
 * @property string type_of_depreciation
 * @property float expected_life
 * @property bigInteger salvage_value
 * @property float years_depreciation
 * @property bigInteger current_value
 * @property string model_no
 * @property string order_number
 * @property string asset_number
 * @property string serial_number
 * @property string rego_number
 * @property string|\Carbon\Carbon rego_due_date
 * @property float height
 * @property float width
 * @property float depth
 * @property float weight
 * @property string color
 * @property string supplier_code
 * @property string|\Carbon\Carbon warranty_start
 * @property string|\Carbon\Carbon warranty_finish
 * @property string barcode_number
 * @property string file_name
 * @property string asset_uom
 * @property string doc_type
 * @property string doc_custom_no
 * @property string doc_custom_no_ext
 * @property string|\Carbon\Carbon doc_custom_date
 * @property string do_no
 * @property string|\Carbon\Carbon do_date
 * @property string grn_no
 * @property string|\Carbon\Carbon utilization_date
 * @property string room
 * @property smallInteger export_status
 * @property string bg_no
 * @property string|\Carbon\Carbon bg_exp_date
 * @property smallInteger bg_status
 * @property string cab_id
 * @property string permit_doc_no
 * @property string invoice_no
 * @property string pack_list_no
 * @property integer create_by
 * @property integer update_by
 */
class CoreAssets extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_assets';






    protected $primaryKey = 'id';

    public $fillable = [
        'uuid',
        'asset_code',
        'asset_desc',
        'asset_group',
        'asset_level',
        'asset_type',
        'kode_dep',
        'account_code',
        'ext_name',
        'alias_name',
        'acq_cost',
        'acq_date',
        'custodian',
        'manufacturer',
        'quantity',
        'last_maint_date',
        'date_added',
        'status',
        'currency_id',
        'transfer_date',
        'transfer_event',
        'type_of_depreciation',
        'expected_life',
        'salvage_value',
        'years_depreciation',
        'current_value',
        'model_no',
        'order_number',
        'asset_number',
        'serial_number',
        'rego_number',
        'rego_due_date',
        'height',
        'width',
        'depth',
        'weight',
        'color',
        'supplier_code',
        'warranty_start',
        'warranty_finish',
        'barcode_number',
        'file_name',
        'asset_uom',
        'doc_type',
        'doc_custom_no',
        'doc_custom_no_ext',
        'doc_custom_date',
        'do_no',
        'do_date',
        'grn_no',
        'utilization_date',
        'room',
        'export_status',
        'bg_no',
        'bg_exp_date',
        'bg_status',
        'cab_id',
        'permit_doc_no',
        'invoice_no',
        'pack_list_no',
        'create_by',
        'update_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'uuid' => 'string',
        'asset_code' => 'string',
        'asset_desc' => 'string',
        'asset_group' => 'string',
        'asset_level' => 'integer',
        'asset_type' => 'string',
        'account_code' => 'string',
        'ext_name' => 'string',
        'alias_name' => 'string',
        'custodian' => 'string',
        'manufacturer' => 'string',
        'quantity' => 'float',
        'currency_id' => 'string',
        'transfer_event' => 'integer',
        'type_of_depreciation' => 'string',
        'expected_life' => 'float',
        'years_depreciation' => 'float',
        'model_no' => 'string',
        'order_number' => 'string',
        'asset_number' => 'string',
        'serial_number' => 'string',
        'rego_number' => 'string',
        'height' => 'float',
        'width' => 'float',
        'depth' => 'float',
        'weight' => 'float',
        'color' => 'string',
        'supplier_code' => 'string',
        'barcode_number' => 'string',
        'file_name' => 'string',
        'asset_uom' => 'string',
        'doc_type' => 'string',
        'doc_custom_no' => 'string',
        'doc_custom_no_ext' => 'string',
        'do_no' => 'string',
        'grn_no' => 'string',
        'room' => 'string',
        'bg_no' => 'string',
        'cab_id' => 'string',
        'permit_doc_no' => 'string',
        'invoice_no' => 'string',
        'pack_list_no' => 'string',
        'create_by' => 'integer',
        'update_by' => 'integer'
    ];

    protected static $logAttributes = [
        'uuid',
        'asset_code',
        'asset_desc',
        'asset_group',
        'asset_level',
        'asset_type',
        'kode_dep',
        'account_code',
        'ext_name',
        'alias_name',
        'acq_cost',
        'acq_date',
        'custodian',
        'manufacturer',
        'quantity',
        'last_maint_date',
        'date_added',
        'status',
        'currency_id',
        'transfer_date',
        'transfer_event',
        'type_of_depreciation',
        'expected_life',
        'salvage_value',
        'years_depreciation',
        'current_value',
        'model_no',
        'order_number',
        'asset_number',
        'serial_number',
        'rego_number',
        'rego_due_date',
        'height',
        'width',
        'depth',
        'weight',
        'color',
        'supplier_code',
        'warranty_start',
        'warranty_finish',
        'barcode_number',
        'file_name',
        'asset_uom',
        'doc_type',
        'doc_custom_no',
        'doc_custom_no_ext',
        'doc_custom_date',
        'do_no',
        'do_date',
        'grn_no',
        'utilization_date',
        'room',
        'export_status',
        'bg_no',
        'bg_exp_date',
        'bg_status',
        'cab_id',
        'permit_doc_no',
        'invoice_no',
        'pack_list_no',
        'create_by',
        'update_by'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
