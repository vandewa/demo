<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;
use Auth;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OauthRefreshTokens
 * @package App\Models\His
 * @version August 23, 2017, 3:47 am UTC
 *
 * @property string access_token_id
 * @property boolean revoked
 * @property string|\Carbon\Carbon expires_at
 */
class OauthRefreshTokens extends Model implements Auditable
{
use \OwenIt\Auditing\Auditable;


    public $table = 'oauth_refresh_tokens';






    protected $primaryKey = 'id';

    public $fillable = [
        'access_token_id',
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
        'access_token_id' => 'string',
        'revoked' => 'boolean'
    ];

    protected static $logAttributes = [
        'access_token_id',
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
