<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxPasienIdentity
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string pasien_cd
 * @property string identity_tp
 * @property string id_no
 * @property string address
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxPasienIdentity extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_pasien_identity';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'pasien_cd',
        'identity_tp',
        'id_no',
        'address',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pasien_cd' => 'string',
        'identity_tp' => 'string',
        'id_no' => 'string',
        'address' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pasien_cd',
        'identity_tp',
        'id_no',
        'address',
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
