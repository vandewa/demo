<?php

namespace App\Models\His;
use OwenIt\Auditing\Contracts\Auditable;

use Illuminate\Database\Eloquent\Model;

class TrxMedicalSettlementShare extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'trx_settlement_share';

    protected $primaryKey = 'seq_no';

    protected $guarded = [];
}
