<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComLogDetail
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string column_nm
 * @property string old_value
 * @property string new_value
 * @property string change_tp
 * @property string change_ds
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComLogDetail extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_log_detail';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'column_nm',
        'old_value',
        'new_value',
        'change_tp',
        'change_ds',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'column_nm' => 'string',
        'old_value' => 'string',
        'new_value' => 'string',
        'change_tp' => 'string',
        'change_ds' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'column_nm',
        'old_value',
        'new_value',
        'change_tp',
        'change_ds',
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
