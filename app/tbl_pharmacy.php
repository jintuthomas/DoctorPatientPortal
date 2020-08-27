<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_pharmacy extends Model
{
   
	public $fillable=['b_id','c_id','m_name','gram','quantity','price','description','type','status'];
}
