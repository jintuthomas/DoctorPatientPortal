<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table="tbl_city";
    protected $primarykey="city_id";

    public $fillable=[
        'city_name','district_id',
        
    ];
}
