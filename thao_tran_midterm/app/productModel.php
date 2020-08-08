<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table ='products'; 
    protected $fillabel=['id','name','id_type','description','unit_price','promotion_price','image','unit','new']; 
    public $timestamps=true;
    public function categories() {
    	return $this->hasMany('App\productModel','id_type','id');
    }
}
