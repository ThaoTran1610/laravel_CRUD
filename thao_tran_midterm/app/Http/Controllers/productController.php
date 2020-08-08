<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use Validator;
use App\Http\Requests\productRequest;
use Auth;
use Illuminate\Support\ServiceProvider;
use App\productModel; 
use App\categoryModel; 
use input, file;

class productController extends Controller
{

	public function getAddProduct() {
    	$category = categoryModel::select('id','name')->get()->toArray();
    	return view('admin.product.add', compact('category'));
    }

    public function getListProduct() {
    	$cate = categoryModel::select('id','name')->get()->toArray();
		$product = productModel::select('id','cate_id','code','name','image','price','oldprice')->get()->toArray();
		return view('admin.product.list',compact('product'),['category' => $cate]);
	}

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAddProduct(Request $request) {
    	$product = new productModel;
    	$filename = $request->file('txtimage')->getClientOriginalName();
    	$product->image = $filename;
    	$product->cate_id = $request->txtcate_id;
    	$product->code = $request->txtcode;
    	$product->name = $request->txtname;
		$product->price = $request->txtprice;
		$product->oldprice = $request->txtoldprice;
		$request->file('txtimage')->move('public/file_image/images/',$filename);
		$product->save();
		return redirect()->route('admin.product.getListProduct');
    }
    public function getDeleteProduct($id) {
		$product = productModel::find($id);
		$product->delete($id);
		return back();
	}

	public function getEditProduct($id) {
		$cate = categoryModel::select('id','name')->get()->toArray();
		$product = productModel::find($id);
		return view('admin.product.edit',compact('cate','product'));
	}

	public function postEditProduct($id,Request $request) {
		$product = productModel::find($id);
		$image = 'public/file_image/images/'.$request->input('txtimage');
		$product->code = $request->input('txtcode');
		$product->name = $request->input('txtname');
		$product->price = $request->input('txtprice');
		$product->oldprice = $request->input('txtoldprice');
		
		$product->cate_id = $request->input('txtcate_id');
		
		$product->save();
		return redirect()->route('admin.product.getListProduct')->with('success','Sửa sản phẩm thành công!');
	}
}
