<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    protected $table = 'categories';
    protected $fillabel = ['id','name','description','image'];
    public $timestamps=true;
    public function products() {
    	return $this->belongsTo('App\categoryModel','id_type','id');
    }
}
