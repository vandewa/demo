<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use Illuminate\Database\Eloquent\Model;

class LISIntegration extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table;
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $connection = 'lis';
    public $fillable = [
        'hisnoreg',
        'hisnoorder',
        'ipop',
        'hisrm',
        'patientname',
        'sex',
        'patientdob',
        'patientaddres',
        'patientphone',
        'roomcode',
        'roomname',
        'doctorklinisicode',
        'doctorklinisiname',
        'doctorpjcode',
        'doctorpjname',
        'diagnose',
        'class',
        'patenttype',
        'rujukan',
        'transdate',
        'test',
        'status',
        'action',
        'iscito'
    ];

    public function __construct()
    {
        $this->table = env('LIS_TABLE', 'integrasi');
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    protected static $logAttributes = [
        'treatment_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
