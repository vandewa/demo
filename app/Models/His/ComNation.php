<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComNation
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string nation_nm
 * @property string capital
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComNation extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_nation';
    public $timestamps = true;

    public $incrementing = false;
    protected $primaryKey = 'nation_cd';

    public $fillable = [
        'nation_cd',
        'nation_nm',
        'capital',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nation_cd' => 'string',
        'nation_nm' => 'string',
        'capital' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'nation_nm',
        'capital',
        'modi_id',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
