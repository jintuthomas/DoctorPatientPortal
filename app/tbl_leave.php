<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_leave extends Model
{
    public $fillable=['email','date','session','reason','status'];
}
