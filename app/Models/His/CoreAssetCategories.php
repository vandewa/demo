<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreAssetCategories
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string code
 * @property string description
 * @property integer create_by
 * @property integer update_by
 */
class CoreAssetCategories extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_asset_categories';






    protected $primaryKey = 'id';

    public $fillable = [
        'code',
        'description',
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
        'code' => 'string',
        'description' => 'string',
        'create_by' => 'integer',
        'update_by' => 'integer'
    ];

    protected static $logAttributes = [
        'code',
        'description',
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
