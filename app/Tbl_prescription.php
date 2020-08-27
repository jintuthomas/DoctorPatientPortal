<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_prescription extends Model
{
     public $fillable=['pr_id','r_id','prescription','status'];
}
