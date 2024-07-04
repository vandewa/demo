<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComBank
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string bank_nm
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComBank extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_bank';






    protected $primaryKey = 'bank_cd';

    public $fillable = [
        'bank_nm',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'bank_cd' => 'string',
        'bank_nm' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'bank_nm',
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
