<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblcart extends Model
{
    public $fillable=['cart_id','id','mid','quantity','price','status'];
}
