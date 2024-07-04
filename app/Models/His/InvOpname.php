<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class InvOpname extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = 'inv_opname';
    public $timestamps= false;
    public $incrementing = false;
    public $primaryKey = 'trx_cd';
}
