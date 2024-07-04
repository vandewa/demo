<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvItemGroup
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
class InvItemGroup extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'inv_item_kelompok';

    protected $guarded = [''];


    protected $primaryKey = 'kelompok_cd';

    public $fillable = [
        'kelompok_nm',
        'root_cd',
        'modi_id',
        'modi_datetime',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kelompok_cd' => 'string',
        'kelompok_nm' => 'string',
        'root_cd' => 'string',
        'modi_id' => 'string',
    ];

    protected static $logAttributes = [
        'kelompok_cd',
        'kelompok_nm',
        'root_cd',
        'modi_id',
        'modi_datetime',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
