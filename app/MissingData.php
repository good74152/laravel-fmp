<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MissingData extends Model
{
    protected $fillable=['id','OP_AC_UNIT_NM1','OP_AC_UNIT_NM2','OP_AC_UNIT_NM3','OP_PU_DATE','OP_PU_PLACE','OP_AN_CONTENT'];
}
