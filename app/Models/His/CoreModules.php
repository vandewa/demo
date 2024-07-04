<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreModules
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string name
 * @property string folder
 * @property string source_url
 * @property string description
 * @property boolean status
 */
class CoreModules extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_modules';






    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'folder',
        'source_url',
        'description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'folder' => 'string',
        'source_url' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    protected static $logAttributes = [
        'name',
        'folder',
        'source_url',
        'description',
        'status'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
