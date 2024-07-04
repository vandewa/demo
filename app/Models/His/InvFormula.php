<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvFormula
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string formula_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvFormula extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_formula';






    protected $primaryKey = 'formula_cd';

    public $fillable = [
        'formula_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'formula_cd' => 'string',
        'formula_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'formula_nm',
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


}
