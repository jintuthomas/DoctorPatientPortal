<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_card extends Model
{
    public $fillable=['c_name','c_no','cvv','exp','status'];
}
