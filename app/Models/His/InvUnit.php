<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvUnit
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string unit_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvUnit extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'inv_unit';

    protected $guarded = [''];
    protected $primaryKey = 'unit_cd';
    public $incrementing = false;
    protected $keyType = 'string';


    public $fillable = [
        'unit_cd',
        'unit_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'unit_cd' => 'string',
        'unit_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'unit_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    // Methods
    public function getUnit($q = '')
    {
        return $this->select('unit_cd', 'unit_nm')->where('unit_cd','ilike',"%$q%");
    }


}
