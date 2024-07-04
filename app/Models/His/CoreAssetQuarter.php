<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreAssetQuarter
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property integer year
 * @property integer quarter
 * @property date start_date
 * @property date end_date
 * @property date mid_date
 * @property smallInteger closed_status
 * @property integer create_by
 * @property integer update_by
 */
class CoreAssetQuarter extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_asset_quarter';






    protected $primaryKey = 'id';

    public $fillable = [
        'year',
        'quarter',
        'start_date',
        'end_date',
        'mid_date',
        'closed_status',
        'create_by',
        'update_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'year' => 'integer',
        'quarter' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'mid_date' => 'date',
        'create_by' => 'integer',
        'update_by' => 'integer'
    ];

    protected static $logAttributes = [
        'year',
        'quarter',
        'start_date',
        'end_date',
        'mid_date',
        'closed_status',
        'create_by',
        'update_by'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
