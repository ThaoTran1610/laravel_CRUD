<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detailModel extends Model
{
    protected $table = 'billDetails';
    protected $fillabel = ['id','id_bill','id_product','quantity','unit_price'];
    public $timestamps=true;
    public function bills() {
    	return $this->hasMany('App\bill_detailModel','id_bill','id');
    }
    public function products() {
    	return $this->belongsTo('App\productModel','id_product','id');
    }
}
