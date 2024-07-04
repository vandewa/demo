<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OauthClients
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property integer user_id
 * @property string name
 * @property string secret
 * @property string redirect
 * @property boolean personal_access_client
 * @property boolean password_client
 * @property boolean revoked
 */
class OauthClients extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'oauth_clients';






    protected $primaryKey = 'id';

    public $fillable = [
        'user_id',
        'name',
        'secret',
        'redirect',
        'personal_access_client',
        'password_client',
        'revoked'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'name' => 'string',
        'secret' => 'string',
        'redirect' => 'string',
        'personal_access_client' => 'boolean',
        'password_client' => 'boolean',
        'revoked' => 'boolean'
    ];

    protected static $logAttributes = [
        'user_id',
        'name',
        'secret',
        'redirect',
        'personal_access_client',
        'password_client',
        'revoked'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
