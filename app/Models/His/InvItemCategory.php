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
class InvItemCategory extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'inv_item_kategori';

    protected $guarded = [''];


    protected $primaryKey = 'kategori_cd';

    public $fillable = [
        'kategori_cd',
        'kategori_nm',
        'root_cd',
        'modi_id',
        'modi_datetime',
        'type_cd',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kategori_cd' => 'string',
        'kategori_nm' => 'string',
        'root_cd' => 'string',
        'modi_id' => 'string',
        'type_cd' => 'string'
    ];

    protected static $logAttributes = [
        'kategori_cd',
        'kategori_nm',
        'root_cd',
        'modi_id',
        'modi_datetime',
        'type_cd',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function getDataJoin()
    {

      $model = DB::table('inv_item_kategori')
              ->select('inv_item_kategori.kategori_cd','inv_item_kategori.kategori_nm','inv_item_kategori.root_cd','inv_item_kategori.modi_id','inv_item_kategori.modi_datetime','inv_item_kategori.type_cd','inv_item_type.type_nm')
              ->leftjoin('inv_item_type','inv_item_kategori.type_cd','inv_item_type.type_cd')
              ->get();
      return  $model;
    }


    public function getDataWhere($id)
    {

      $model = DB::table('inv_item_kategori')
              ->select('inv_item_kategori.kategori_cd','inv_item_kategori.kategori_nm','inv_item_kategori.root_cd','inv_item_kategori.modi_id','inv_item_kategori.modi_datetime','inv_item_kategori.type_cd','inv_item_type.type_nm')
              ->leftjoin('inv_item_type','inv_item_kategori.type_cd','inv_item_type.type_cd')
              ->where('inv_item_kategori.kategori_cd', $id)
              ->first();
      return  $model;
    }

    public function getDataType($params = array()) {
        $data = DB::table('inv_item_type')
        ->select('inv_item_type.type_cd','inv_item_type.type_nm')
        ->where(DB::raw('lower(inv_item_type.type_nm)'), 'like','%'.strtolower((isset($params['search_text'])?$params['search_text']:'')).'%')
        ->get();
        return $data;
    }


    public function scopekategoriList()
    {
        return $this::select( 'kategori_cd','kategori_nm');
    }
}
