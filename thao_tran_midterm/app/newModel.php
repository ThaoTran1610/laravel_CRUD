<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newModel extends Model
{
    protected $table ='news'; 
    protected $fillabel=['id','title','content','image']; 
    public $timestamps=true;
   
}
