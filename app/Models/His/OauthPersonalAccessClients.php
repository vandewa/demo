<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OauthPersonalAccessClients
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property integer client_id
 */
class OauthPersonalAccessClients extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'oauth_personal_access_clients';






    protected $primaryKey = 'id';

    public $fillable = [
        'client_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer'
    ];

    protected static $logAttributes = [
        'client_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
