<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrxUnitMedis
 * @package App\Models\His
 * @version August 23, 2017, 3:50 am UTC
 *
 * @property string medunit_nm
 * @property string medicalunit_tp
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string medunit_no
 * @property integer medunit_urut
 */
class TrxUnitMedis extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $table = 'trx_unit_medis';

    protected $guarded = [''];


    protected $primaryKey = 'medunit_cd';

    public $incrementing = false;
    protected $keyType = 'string';



    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'medunit_cd' => 'string',
        'medunit_nm' => 'string',
        'medicalunit_tp' => 'string',
        'modi_id' => 'string',
        'medunit_no' => 'string',
        'medunit_urut' => 'integer'
    ];

    protected static $logAttributes = [
        'medunit_nm',
        'medicalunit_tp',
        'modi_id',
        'modi_datetime',
        'medunit_no',
        'medunit_urut'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    // Methods

    public function getUnitCode()
    {

        $currentMonthDate = Carbon::now()->format('md');
        $query = DB::table($this->table)
            ->select(
                DB::raw("
                           'PI-$currentMonthDate-'||lpad((right(item_cd, 5)::int8+1)::varchar, 5, '0') as item_cd
                       ")
            )
            ->where(function ($q) {
                $q->where(DB::raw("left(item_cd, 2)"), 'PI')
                    ->where(DB::raw("substring(item_cd, 4, 4)"), DB::raw("to_char(now(), 'mmdd')"));
            })
            ->orderByRaw("
                              substring(item_cd, 4, 4)::int desc,
                              substring(item_cd, 9, 13)::int desc
                          ");
    }

    public function getUnitMedis($args)
    {
        return DB::table($this->table)->where(function ($q) use ($args) {
            $q->where('medunit_cd', 'ilike', '%' . $args . '%')
                ->orWhere('medunit_nm', 'ilike', '%' . $args . '%');
        });
    }

    public function scopeCari($query, $s)
    {
        if ($s) {
            return $query->where('medunit_cd', 'ilike', "%$s%")->orWhere('medunit_nm', 'ilike', "%$s%");
        }
    }

}