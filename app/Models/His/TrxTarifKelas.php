<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxTarifKelas
 * @package App\Models\His
 * @version August 23, 2017, 3:49 am UTC
 *
 * @property string insurance_cd
 * @property string kelas_cd
 * @property decimal tarif
 * @property string account_cd
 * @property string rstp_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxTarifKelas extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_tarif_kelas';






    protected $primaryKey = 'seq_no';

    protected $guarded = [];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'insurance_cd' => 'string',
        'kelas_cd' => 'string',
        'account_cd' => 'string',
        'rstp_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'insurance_cd',
        'kelas_cd',
        'tarif',
        'account_cd',
        'rstp_cd',
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

    public function kelas(){
        return $this->belongsTo(TrxKelas::class, 'kelas_cd');
    }

    public function asuransi(){
        return $this->belongsTo(TrxInsurance::class, 'insurance_cd');
    }

    public function account()
    {
        return $this->belongsTo(ComAccount::class, 'account_cd');
    }


}
