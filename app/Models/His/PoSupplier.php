<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PoSupplier
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string supplier_nm
 * @property string address
 * @property string city
 * @property string province
 * @property string postcode
 * @property string phone
 * @property string mobile
 * @property string fax
 * @property string email
 * @property string npwp
 * @property string pic
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoSupplier extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'po_supplier';

    protected $guarded = [''];


    protected $primaryKey = 'supplier_cd';

    public $fillable = [
        'supplier_cd',
        'supplier_nm',
        'address',
        'city',
        'province',
        'postcode',
        'phone',
        'mobile',
        'fax',
        'email',
        'npwp',
        'pic',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'supplier_cd' => 'string',
        'supplier_nm' => 'string',
        'address' => 'string',
        'city' => 'string',
        'province' => 'string',
        'postcode' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'npwp' => 'string',
        'pic' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'supplier_nm',
        'address',
        'city',
        'province',
        'postcode',
        'phone',
        'mobile',
        'fax',
        'email',
        'npwp',
        'pic',
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

    public static function getData($param='')
    {
        if($param == ''){
            $data = DB::table('po_supplier')->get();
        }else{
            $data = DB::table('po_supplier')->where('supplier_cd',$param)->get()->first();
        }
        return $data;
                // ->join('')
    }


}
