<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CoreCompanies
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string name
 * @property string address
 */
class CoreCompanies extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'core_companies';






    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'address' => 'string'
    ];

    protected static $logAttributes = [
        'name',
        'address'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
