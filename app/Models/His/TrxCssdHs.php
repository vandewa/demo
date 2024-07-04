<?php
namespace  App \Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxCssd
 * @package App\Models\His
 * @version September 13, 2017, 3:48 am UTC
 *
 * @property integer seq_no
 * @property string|\Carbon\Carbon trx_date
 * @property string cssd_st
 * @property string asset_id
 * @property integer trx_qty
 * @property integer asset_seqno
 * @property string|\Carbon\Carbon modi_datetime
 */

class TrxCssdHs extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;


  public $table = 'trx_cssd_hs';

  protected $guarded = [''];





  protected $primaryKey = 'seq_no';

  public $fillable = [
    'seq_no',
    'trx_date',
    'cssd_st',
    'trx_qty',
    'asset_seqno',
    'modi_datetime'
  ];

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
  protected $casts = [];

  protected static $logAttributes = [
    'seq_no',
    'trx_date',
    'cssd_st',
    'trx_qty',
    'asset_seqno',
    'modi_datetime'
  ];


  protected static $logOnlyDirty = true;

  /**
   * Validation rules
   *
   * @var array
   */
  public static $rules = [];

  public function status()
  {
    return $this->hasOne('App\Models\Code', 'com_cd', 'cssd_st');
  }

  public function detail()
  {
    return $this->hasOne('App\Models\His\TrxCssd', 'seq_no', 'asset_seqno');
  }


}
