<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_Order extends Model
{
   public $fillable=['amt_id','p_id','mid','quantity','price','status'];

}
