<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FaTransHeader
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string partner_id
 * @property string|\Carbon\Carbon date_trans
 * @property string|\Carbon\Carbon date_issued
 * @property integer umur
 * @property string unit
 * @property string metode
 * @property string id_group
 * @property smallInteger validasi
 * @property smallInteger closed
 * @property string bank_id
 * @property string type_trans
 * @property integer periode
 * @property string acc_dep
 * @property string dep_aktiva
 * @property smallInteger disposal
 * @property bigInteger dp
 * @property string no_cheque
 * @property string cab_id
 * @property integer create_by
 * @property integer update_by
 */
class FaTransHeader extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'fa_trans_header';






    protected $primaryKey = 'trans_id';

    public $fillable = [
        'partner_id',
        'date_trans',
        'date_issued',
        'umur',
        'unit',
        'metode',
        'id_group',
        'validasi',
        'closed',
        'bank_id',
        'type_trans',
        'periode',
        'acc_dep',
        'dep_aktiva',
        'disposal',
        'dp',
        'no_cheque',
        'cab_id',
        'create_by',
        'update_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'trans_id' => 'string',
        'partner_id' => 'string',
        'umur' => 'integer',
        'unit' => 'string',
        'metode' => 'string',
        'id_group' => 'string',
        'bank_id' => 'string',
        'type_trans' => 'string',
        'periode' => 'integer',
        'acc_dep' => 'string',
        'dep_aktiva' => 'string',
        'no_cheque' => 'string',
        'cab_id' => 'string',
        'create_by' => 'integer',
        'update_by' => 'integer'
    ];

    protected static $logAttributes = [
        'partner_id',
        'date_trans',
        'date_issued',
        'umur',
        'unit',
        'metode',
        'id_group',
        'validasi',
        'closed',
        'bank_id',
        'type_trans',
        'periode',
        'acc_dep',
        'dep_aktiva',
        'disposal',
        'dp',
        'no_cheque',
        'cab_id',
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
