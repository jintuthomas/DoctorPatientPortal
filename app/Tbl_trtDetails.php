<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_trtDetails extends Model
{
    public $fillable=['trt_id','treatment','time','section','status'];

}
