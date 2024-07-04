<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxTarifUnitmedis
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property string insurance_cd
 * @property string kelas_cd
 * @property string medicalunit_cd
 * @property decimal tarif
 * @property string account_cd
 * @property string rstp_cd
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxTarifUnitmedis extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_tarif_unitmedis';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'insurance_cd',
        'kelas_cd',
        'medicalunit_cd',
        'tarif',
        'account_cd',
        'rstp_cd',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'insurance_cd' => 'string',
        'kelas_cd' => 'string',
        'medicalunit_cd' => 'string',
        'account_cd' => 'string',
        'rstp_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'insurance_cd',
        'kelas_cd',
        'medicalunit_cd',
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

    public function unitMedisItem()
    {
        return $this->belongsTo(TrxUnitmedisItem::class, 'medicalunit_cd');
    }


}
