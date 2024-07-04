<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxKomponenTarif
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property bigInteger trx_tarif_seqno
 * @property string tarif_tp
 * @property string paramedis_tp
 * @property decimal komponen_institusi
 * @property decimal komponen_paramedis
 * @property decimal komponen_instrumen
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxKomponenTarif extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_komponen_tarif';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'trx_tarif_seqno',
        'tarif_tp',
        'paramedis_tp',
        'komponen_institusi',
        'komponen_paramedis',
        'komponen_instrumen',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tarif_tp' => 'string',
        'paramedis_tp' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'trx_tarif_seqno',
        'tarif_tp',
        'paramedis_tp',
        'komponen_institusi',
        'komponen_paramedis',
        'komponen_instrumen',
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
