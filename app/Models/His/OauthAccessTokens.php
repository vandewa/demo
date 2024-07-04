<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OauthAccessTokens
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property integer user_id
 * @property integer client_id
 * @property string name
 * @property string scopes
 * @property boolean revoked
 * @property string|\Carbon\Carbon expires_at
 */
class OauthAccessTokens extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'oauth_access_tokens';






    protected $primaryKey = 'id';

    public $fillable = [
        'user_id',
        'client_id',
        'name',
        'scopes',
        'revoked',
        'expires_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'user_id' => 'integer',
        'client_id' => 'integer',
        'name' => 'string',
        'scopes' => 'string',
        'revoked' => 'boolean'
    ];

    protected static $logAttributes = [
        'user_id',
        'client_id',
        'name',
        'scopes',
        'revoked',
        'expires_at'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
