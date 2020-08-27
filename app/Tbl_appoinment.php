<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_appoinment extends Model
{
    public $fillable=['d_id','p_id','date','time','status'];
}
