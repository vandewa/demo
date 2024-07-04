<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InvPosInventory
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string pos_nm
 * @property string pos_root
 * @property string description
 * @property string unit_medis
 * @property string postrx_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvPosInventory extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'inv_pos_inventory';

    protected $guarded = [''];


    protected $primaryKey = 'pos_cd';

    public $incrementing = false;

    public $fillable = [
        'pos_cd',
        'pos_nm',
        'pos_root',
        'description',
        'unit_medis',
        'postrx_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pos_cd' => 'string',
        'pos_nm' => 'string',
        'pos_root' => 'string',
        'description' => 'string',
        'unit_medis' => 'string',
        'postrx_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pos_nm',
        'pos_root',
        'description',
        'unit_medis',
        'postrx_st',
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

    public static function getData() {
        $data = DB::connection()->table('inv_pos_inventory')
        ->select('pos_cd','pos_nm','pos_root','description','unit_medis','postrx_st');
        return $data;
    }

    public function unitMedis()
    {
        return $this->hasOne(TrxUnitMedis::class,'medunit_cd');
    }

}
