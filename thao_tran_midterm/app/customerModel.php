<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customerModel extends Model
{
    protected $table ='customers'; 
    protected $fillabel=['id','name','gender','email','address','phone_number','note']; 
    public $timestamps=true;
    public function bills() {
    	return $this->belongsTo('App\customerModel','id_customer','id');
    }
}
