<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComLogData
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string table_nm
 * @property string table_pk
 * @property string old_value
 * @property string new_value
 * @property string change_tp
 * @property string change_ds
 * @property string|\Carbon\Carbon log_date
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class ComLogData extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_log_data';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'table_nm',
        'table_pk',
        'old_value',
        'new_value',
        'change_tp',
        'change_ds',
        'log_date',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'table_nm' => 'string',
        'table_pk' => 'string',
        'old_value' => 'string',
        'new_value' => 'string',
        'change_tp' => 'string',
        'change_ds' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'table_nm',
        'table_pk',
        'old_value',
        'new_value',
        'change_tp',
        'change_ds',
        'log_date',
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
