<?php

namespace App\Models\His;

use Illuminate\Database\Eloquent\Model;

class TrxTitipObat extends Model implements Auditable
{
	protected $guarded = [''];

    public $table = 'trx_titip_obat';
    protected $primaryKey = 'seq_no';
}
