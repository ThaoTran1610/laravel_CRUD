<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billModel extends Model
{
    protected $table ='bills'; 
    protected $fillabel=['id','id_customer','date_order','total','payment','note']; 
    public $timestamps=true;
    public function customers() {
    	return $this->belongsTo('App\billModel','id_customer','id');
    }
}
