<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvItemMaster
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string type_cd
 * @property string unit_cd
 * @property string item_nm
 * @property string barcode
 * @property string currency_cd
 * @property decimal item_price_buy
 * @property decimal item_price
 * @property string vat_tp
 * @property decimal ppn
 * @property decimal reorder_point
 * @property decimal minimum_stock
 * @property decimal maximum_stock
 * @property string generic_st
 * @property string active_st
 * @property string inventory_st
 * @property string tariftp_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string obat_st
 * @property string subkelompok_cd
 * @property string golongan_cd
 * @property string subgolongan_cd
 * @property string kategori_cd
 * @property string subkategori_cd
 * @property string kelompok_cd
 */
class InvItemMaster extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'inv_item_master';

    public $timestamps = true;

    protected $guarded = [''];

    public $incrementing = false;

    protected $primaryKey = 'item_cd';



    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_cd' => 'string',
        'type_cd' => 'string',
        'unit_cd' => 'string',
        'item_nm' => 'string',
        'barcode' => 'string',
        'currency_cd' => 'string',
        'vat_tp' => 'string',
        'generic_st' => 'string',
        'active_st' => 'string',
        'inventory_st' => 'string',
        'tariftp_cd' => 'string',
        'modi_id' => 'string',
        'obat_st' => 'string',
        'subkelompok_cd' => 'string',
        'golongan_cd' => 'string',
        'subgolongan_cd' => 'string',
        'kategori_cd' => 'string',
        'subkategori_cd' => 'string',
        'kelompok_cd' => 'string'
    ];

    protected static $logAttributes = [
        'type_cd',
        'unit_cd',
        'item_nm',
        'barcode',
        'currency_cd',
        'item_price_buy',
        'item_price',
        'vat_tp',
        'ppn',
        'reorder_point',
        'minimum_stock',
        'maximum_stock',
        'generic_st',
        'active_st',
        'inventory_st',
        'tariftp_cd',
        'modi_id',
        'modi_datetime',
        'obat_st',
        'subkelompok_cd',
        'golongan_cd',
        'subgolongan_cd',
        'kategori_cd',
        'subkategori_cd',
        'kelompok_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function satuan(){
        return $this->belongsTo(InvUnit::class, 'unit_cd');
    }

    public function type(){
        return $this->belongsTo(InvItemType::class, 'type_cd');
    }

    public function stock(){

    }

    public function generic(){
        return $this->belongsTo(ComCode::class, 'generic_st');
    }

    // cari berdasarkan nama dan barcode
    public function scopeCari($filter, $value) {
        if($value){
           return $filter->where('item_nm', 'ilike', "%$value%")
            ->orWhere('barcode', 'ilike', "%$value%");
        }
    }
}
