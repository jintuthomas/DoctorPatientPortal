<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $fillable=['name','email','passsword','role','status','remember_token'];
}
