<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxBankdarahStock
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property bigInteger source_cd
 * @property string kantong_cd
 * @property string golongan_darah
 * @property string tekanan_darah
 * @property string hb
 * @property string wb_tp
 * @property string we_tp
 * @property string prc_tp
 * @property string lp_tp
 * @property string tc_tp
 * @property string prp_tp
 * @property integer berat_donor
 * @property integer jumlah_donor
 * @property string|\Carbon\Carbon datetime_trx
 * @property string|\Carbon\Carbon datetime_expired
 * @property string status_pemakaian
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class TrxBankdarahStock extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_bankdarah_stock';






    protected $primaryKey = 'stock_seq_no';

    public $fillable = [
        'source_cd',
        'kantong_cd',
        'golongan_darah',
        'tekanan_darah',
        'hb',
        'wb_tp',
        'we_tp',
        'prc_tp',
        'lp_tp',
        'tc_tp',
        'prp_tp',
        'berat_donor',
        'jumlah_donor',
        'datetime_trx',
        'datetime_expired',
        'status_pemakaian',
        'note',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'kantong_cd' => 'string',
        'golongan_darah' => 'string',
        'tekanan_darah' => 'string',
        'hb' => 'string',
        'wb_tp' => 'string',
        'we_tp' => 'string',
        'prc_tp' => 'string',
        'lp_tp' => 'string',
        'tc_tp' => 'string',
        'prp_tp' => 'string',
        'berat_donor' => 'integer',
        'jumlah_donor' => 'integer',
        'status_pemakaian' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'source_cd',
        'kantong_cd',
        'golongan_darah',
        'tekanan_darah',
        'hb',
        'wb_tp',
        'we_tp',
        'prc_tp',
        'lp_tp',
        'tc_tp',
        'prp_tp',
        'berat_donor',
        'jumlah_donor',
        'datetime_trx',
        'datetime_expired',
        'status_pemakaian',
        'note',
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
