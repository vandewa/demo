<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvItemTariftp
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string tariftp_cd
 * @property string tariftp_nm
 * @property string insurance_cd
 * @property decimal persen_tarif
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvItemTariftp extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_item_tariftp';






    protected $primaryKey = 'tariftp_no';

    public $fillable = [
        'tariftp_cd',
        'tariftp_nm',
        'insurance_cd',
        'persen_tarif',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tariftp_cd' => 'string',
        'tariftp_nm' => 'string',
        'insurance_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'tariftp_cd',
        'tariftp_nm',
        'insurance_cd',
        'persen_tarif',
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
