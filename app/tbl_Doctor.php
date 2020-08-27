<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_Doctor extends Model
{
     public $fillable=['d_name','surname','dob','gender','sid','h_name','city','state','country','zip','email','phone','quali','y_exp','emp_history','fee','photo','status'];

}
