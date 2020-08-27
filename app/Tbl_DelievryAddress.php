<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_DelievryAddress extends Model
{
   public $fillable=['p_id','name','address','city','district','pin','phone','status'];
}
