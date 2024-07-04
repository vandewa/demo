<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class InvPosItem
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string item_cd
 * @property decimal quantity
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 */
class InvPosItem extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'inv_pos_item';

    protected $guarded = [''];

    public $timestamps = true;




    protected $primaryKey = 'id';

    public $incrementing = true;

    // public $timestamps = true;


    public $fillable = [
        'pos_cd',
        'item_cd',
        'quantity',
        'modi_id',
        'modi_datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pos_cd' => 'string',
        'pos_cd' => 'string',
        'item_cd' => 'string',
        'modi_id' => 'string'
    ];

    protected static $logAttributes = [
        'pos_cd',
        'item_cd',
        'quantity',
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

    public function item()
    {
        return $this->belongsTo(InvItemMaster::class, 'item_cd');
    }

}
