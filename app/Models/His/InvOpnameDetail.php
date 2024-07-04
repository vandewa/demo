<?php

namespace App\Models\His;

use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Model;

class InvOpnameDetail extends Model implements Auditable
{
  use \OwenIt\Auditing\Auditable;
  protected $table = 'inv_opname_detail';
  protected $primaryKey = 'seq_no';
  public $timestamps= false;
  // public $incrementing = false;
  protected $fillable = ['quantity_real'];
}
