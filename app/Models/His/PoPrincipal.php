<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PoPrincipal
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string principal_nm
 * @property string address
 * @property string city
 * @property string province
 * @property string postcode
 * @property string phone
 * @property string mobile
 * @property string fax
 * @property string email
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoPrincipal extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_principal';






    protected $primaryKey = 'principal_cd';

    public $fillable = ['principal_cd',
        'principal_nm',
        'address',
        'city',
        'province',
        'postcode',
        'phone',
        'mobile',
        'fax',
        'email',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'principal_cd' => 'string',
        'principal_nm' => 'string',
        'address' => 'string',
        'city' => 'string',
        'province' => 'string',
        'postcode' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'principal_nm',
        'address',
        'city',
        'province',
        'postcode',
        'phone',
        'mobile',
        'fax',
        'email',
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
            $data = DB::table('po_principal')->get();
        }else{
            $data = DB::table('po_principal')->where('principal_cd',$param)->get()->first();
        }
        return $data;
                // ->join('')
    }


}
