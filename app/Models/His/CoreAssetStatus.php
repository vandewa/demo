<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreAssetStatus
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string description
 * @property integer default
 * @property integer create_by
 * @property integer update_by
 */
class CoreAssetStatus extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_asset_status';






    protected $primaryKey = 'id';

    public $fillable = [
        'description',
        'default',
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
        'description' => 'string',
        'default' => 'integer',
        'create_by' => 'integer',
        'update_by' => 'integer'
    ];

    protected static $logAttributes = [
        'description',
        'default',
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
