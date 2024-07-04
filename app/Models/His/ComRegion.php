<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ComRegion
 * @package App\Models\His
 * @version August 23, 2017, 3:46 am UTC
 *
 * @property string region_nm
 * @property string region_root
 * @property string region_capital
 * @property integer region_level
 * @property string default_st
 * @property string modi_id
 * @property string|\Carbon\Carbon modi_datetime
 * @property string postal_cd
 */
class ComRegion extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'com_region';

    protected $primaryKey = 'region_cd';
    public $incrementing = false;

    public $fillable = [
        'region_cd',
        'region_nm',
        'region_root',
        'region_capital',
        'region_level',
        'default_st',
        'modi_id',
        'modi_datetime',
        'postal_cd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'region_cd' => 'string',
        'region_nm' => 'string',
        'region_root' => 'string',
        'region_capital' => 'string',
        'region_level' => 'integer',
        'default_st' => 'string',
        'modi_id' => 'string',
        'postal_cd' => 'string'
    ];

    protected static $logAttributes = [
        'region_nm',
        'region_root',
        'region_capital',
        'region_level',
        'default_st',
        'modi_id',
        'modi_datetime',
        'postal_cd'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function kabupatens()
    {
        return $this->hasMany(ComRegion::class, 'region_root');
    }
    public function kecamatans()
    {
        return $this->hasMany(ComRegion::class, 'region_root');
    }
    public function kelurahans()
    {
        return $this->hasMany(ComRegion::class, 'region_root');
    }



}
