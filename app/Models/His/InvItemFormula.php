<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InvItemFormula
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string formula_cd
 * @property decimal content
 * @property string unit_cd
 * @property string main_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvItemFormula extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_item_formula';






    protected $primaryKey = 'item_cd';

    public $fillable = [
        'item_cd',
        'formula_cd',
        'content',
        'unit_cd',
        'main_st',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'item_cd' => 'string',
        'formula_cd' => 'string',
        'unit_cd' => 'string',
        'main_st' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'formula_cd',
        'content',
        'unit_cd',
        'main_st',
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
            $data = DB::table('inv_item_formula')
                ->join('inv_item_master','inv_item_formula.item_cd','inv_item_master.item_cd')
                ->join('inv_unit','inv_item_formula.unit_cd','inv_unit.unit_cd')
                ->get();
        }else{
            $data = DB::table('inv_item_formula')
                ->join('inv_item_master','inv_item_formula.item_cd','inv_item_master.item_cd')
                ->join('inv_unit','inv_item_formula.unit_cd','inv_unit.unit_cd')
                ->where('inv_item_formula.item_cd',$param)
                ->get()->first();
        }

        return $data;
    }
}
