<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slideModel extends Model
{
    protected $table ='slides'; 
    protected $fillabel=['id','link','image']; 
    public $timestamps=true;
    
}
