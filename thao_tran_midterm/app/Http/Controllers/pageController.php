<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function getIndex(){
    	return view('front_end.home');
    }

    public function getProductType(){
    	return view('front_end.loai_san_pham');
    }
    public function getProductDetail(){
    	return view('front_end.chitiet_sanpham');
    }
    public function getContact(){
    	return view('front_end.lienhe');
    }
    public function getAbout(){
    	return view('front_end.gioithieu');
    }
}
