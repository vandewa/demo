<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InvItemMove
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string pos_cd
 * @property string pos_destination
 * @property string item_cd
 * @property string trx_by
 * @property string|\Carbon\Carbon trx_datetime
 * @property decimal trx_qty
 * @property decimal old_stock
 * @property decimal new_stock
 * @property string purpose
 * @property string vendor
 * @property string move_tp
 * @property string note
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvItemMove extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_item_move';

    public $timestamps = true;

    protected $primaryKey = 'move_seqno';

   protected $guarded = [''];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pos_cd' => 'string',
        'pos_destination' => 'string',
        'item_cd' => 'string',
        'trx_by' => 'string',
        'purpose' => 'string',
        'vendor' => 'string',
        'move_tp' => 'string',
        'note' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pos_cd',
        'pos_destination',
        'item_cd',
        'trx_by',
        'trx_datetime',
        'trx_qty',
        'old_stock',
        'new_stock',
        'purpose',
        'vendor',
        'move_tp',
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

    public function getPosCd()
    {
      return $this->belongsTo('App\Models\His\InvPosInventory','pos_cd','pos_cd');
    }

    public function getPosDestination()
    {
      return $this->belongsTo('App\Models\His\InvPosInventory','pos_cd','pos_destination');
    }

    public function getItem()
    {
      return $this->belongsTo('App\Models\His\InvItemMaster','item_cd','item_cd');
    }
}
