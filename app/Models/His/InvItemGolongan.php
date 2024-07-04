<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InvItemCategory
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
class InvItemGolongan extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'inv_item_golongan';

    protected $guarded = [''];


    protected $primaryKey = 'golongan_cd';

    public $fillable = [
        'golongan_cd',
        'golongan_nm',
        'root_cd',
        'modi_id',
        'level_no',
        'type_cd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'golongan_cd' => 'string',
        'golongan_nm' => 'string',
        'root_cd' => 'string',
        'modi_id' => 'string',
        'level_no' => 'string',
        'type_cd' => 'string',
    ];

    protected static $logAttributes = [
        'golongan_cd',
        'golongan_nm',
        'root_cd',
        'modi_id',
        'level_no',
        'type_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function scopegolonganList()
    {
        return $this::select( 'golongan_cd','golongan_nm');
    }

    public static function getData($param='')
    {
        if($param == ''){
            $data = DB::table('inv_item_golongan')
                    ->leftJoin('inv_item_type','inv_item_golongan.type_cd','inv_item_type.type_cd')->orderBy('inv_item_golongan.modi_datetime')->get();
        }else{
            $data = DB::table('inv_item_golongan')
                    ->leftJoin('inv_item_type','inv_item_golongan.type_cd','inv_item_type.type_cd')->where('golongan_cd',$param)
                    ->orderBy('inv_item_golongan.modi_datetime')->get();
        }

        return $data;
    }
}
