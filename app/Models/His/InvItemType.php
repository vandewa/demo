<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvItemType
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string type_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvItemType extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'inv_item_type';

    public $timestamps = true;
    protected $guarded = [''];
    public $incrementing = false;


    protected $primaryKey = 'type_cd';

    public $fillable = [
        'type_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type_cd' => 'string',
        'type_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'type_nm',
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

    // Methods
    public function getType($q='')
    {
        $query = $this->select('type_cd', 'type_nm');


        return $query;
    }

    public static function getData() {
        $data = DB::connection()->table('inv_item_type')
        ->select('type_cd','type_nm');
        return $data;
    }

    public static function getSelectcategory($params = array())
    {
        $data = DB::table('inv_item_type')
                  ->select(DB::raw('type_cd,type_nm'))
                  ->where(DB::raw('lower(inv_item_type.type_nm)'), 'like','%'.strtolower((isset($params['search_text'])?$params['search_text']:'')).'%')
                  ->get();

        return $data;
    }
}
