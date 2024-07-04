<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FaTransLine
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string trans_id
 * @property string asset_id
 * @property bigInteger qty_in
 * @property bigInteger qty_out
 * @property bigInteger harga
 * @property bigInteger price_out
 * @property string no_account
 * @property string doc_reff
 * @property float ppn
 * @property integer create_by
 * @property integer update_by
 */
class FaTransLine extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'fa_trans_line';






    protected $primaryKey = 'id';

    public $fillable = [
        'trans_id',
        'asset_id',
        'qty_in',
        'qty_out',
        'harga',
        'price_out',
        'no_account',
        'doc_reff',
        'ppn',
        'create_by',
        'update_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'trans_id' => 'string',
        'asset_id' => 'string',
        'no_account' => 'string',
        'doc_reff' => 'string',
        'ppn' => 'float',
        'create_by' => 'integer',
        'update_by' => 'integer'
    ];

    protected static $logAttributes = [
        'trans_id',
        'asset_id',
        'qty_in',
        'qty_out',
        'harga',
        'price_out',
        'no_account',
        'doc_reff',
        'ppn',
        'create_by',
        'update_by'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
