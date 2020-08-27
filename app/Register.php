<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $fillable=['p_name','email','gender','dob','phone','h_name','street','district','city','pin','role','status'];
}
