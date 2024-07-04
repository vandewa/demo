<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCssd
 * @package App\Models\His
 * @version September 13, 2017, 3:48 am UTC
 *
 * @property integer seq_no
 * @property string bagian_cd
 * @property string asset_id
 * @property string pj_cd
 * @property string|\Carbon\Carbon trx_date
 * @property integer trx_qty
 * @property string trx_status
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string|\Carbon\Carbon approve_date
 * @property string|\Carbon\Carbon return_date
 * @property string|\Carbon\Carbon steril_date
 * @property string pasien_cd
 * @property string cssd_group
 */
class TrxCssd extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;


    public $table = 'trx_cssd';

    protected $guarded = [''];





    protected $primaryKey = 'seq_no';

    public $fillable = [
        'seq_no',
        'bagian_cd',
        'asset_id',
        'pj_cd',
        'trx_date',
        'trx_qty',
        'trx_status',
        'modi_id',
        'modi_datetime',
        'approve_date',
        'return_date',
        'steril_date',
        'pasien_cd',
        'cssd_group',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    protected static $logAttributes = [
        'seq_no',
        'bagian_cd',
        'asset_id',
        'pj_cd',
        'trx_date',
        'trx_qty',
        'trx_status',
        'modi_id',
        'modi_datetime',
        'approve_date',
        'return_date',
        'steril_date',
        'pasien_cd',
        'cssd_group',
    ];


    protected static $logOnlyDirty = true;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function unit()
    {
        # code...
        return $this->hasOne('App\Models\View\VwPoliBangsal', 'medunit_cd', 'bagian_cd');
    }

    public function asset()
    {
        return $this->belongsTo('App\Models\Finance\FaRegisterTable','asset_id')->select('asset_id', 'asset_desc');
    }


}
