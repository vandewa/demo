<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PoPrDetail
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string item_cd
 * @property string pos_cd
 * @property string unit_cd
 * @property decimal quantity
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class PoPrDetail extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'po_pr_detail';






    protected $primaryKey = 'pr_cd';

    public $fillable = ['pr_cd',
        'item_cd',
        'pos_cd',
        'unit_cd',
        'quantity',
        'note',
        'modi_id',
        'pos_tujuan',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pr_cd' => 'string',
        'item_cd' => 'string',
        'pos_cd' => 'string',
        'unit_cd' => 'string',
        'note' => 'string',
        'pos_tujuan' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'item_cd',
        'pos_cd',
        'unit_cd',
        'quantity',
        'note',
        'modi_id',
        'pos_tujuan',
        'modi_datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
