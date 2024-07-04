<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxBirth
 * @package App\Models\His
 * @version August 23, 2017, 3:48 am UTC
 *
 * @property string parent_cd
 * @property string child_cd
 * @property string|\Carbon\Carbon birth_date
 * @property integer birth_weight
 * @property integer birth_height
 * @property string medical_cd
 */
class TrxBirth extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'trx_birth';






    protected $primaryKey = 'seq_no';

    public $fillable = [
        'parent_cd',
        'child_cd',
        'birth_date',
        'birth_weight',
        'birth_height',
        'medical_cd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'seq_no' => 'integer',
        'parent_cd' => 'string',
        'child_cd' => 'string',
        'birth_weight' => 'integer',
        'birth_height' => 'integer',
        'medical_cd' => 'string'
    ];

    protected static $logAttributes = [
        'parent_cd',
        'child_cd',
        'birth_date',
        'birth_weight',
        'birth_height',
        'medical_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
