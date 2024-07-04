<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreAssetOwner
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string code
 * @property string name
 * @property string address
 * @property string city
 * @property string cell_phone
 * @property integer status
 * @property string cab_id
 * @property string photo
 * @property integer create_by
 * @property integer update_by
 */
class CoreAssetOwner extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_asset_owner';






    protected $primaryKey = 'id';

    public $fillable = [
        'code',
        'name',
        'address',
        'city',
        'cell_phone',
        'status',
        'cab_id',
        'photo',
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
        'name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'cell_phone' => 'string',
        'status' => 'integer',
        'cab_id' => 'string',
        'photo' => 'string',
        'create_by' => 'integer',
        'update_by' => 'integer'
    ];

    protected static $logAttributes = [
        'code',
        'name',
        'address',
        'city',
        'cell_phone',
        'status',
        'cab_id',
        'photo',
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
