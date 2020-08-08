<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModdel extends Model
{
    protected $table ='users'; 
    protected $fillabel=['id','fullname','email','password','phone','address','remember_token']; 
    public $timestamps=true;
   
}
