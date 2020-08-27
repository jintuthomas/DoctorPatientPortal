<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class district extends Model
{
   protected $table="tbl_district";
    protected $primarykey="district_id";

    public $fillable=[
        'name',
        
    ];
}
