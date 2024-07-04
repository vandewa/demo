<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxMedicalresepParam
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property bigInteger medical_resep_seqno
 * @property integer resepparam_seqno
 * @property integer jumlah
 * @property decimal total_amount
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxMedicalresepParam extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_medicalresep_param';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'medical_resep_seqno',
        'resepparam_seqno',
        'jumlah',
        'total_amount',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'resepparam_seqno' => 'integer',
        'jumlah' => 'integer',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'medical_resep_seqno',
        'resepparam_seqno',
        'jumlah',
        'total_amount',
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
