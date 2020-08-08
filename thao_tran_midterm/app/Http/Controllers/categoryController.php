<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoryModel;
use input;
// use Request;

class categoryController extends Controller
{

	public function getAddCategory() {
    	return view('admin.category.add');
    }

    public function getListCategory() {
    	$category = categoryModel::select('id','name')->get()->toArray();
		return view('admin.category.list',compact('category'));
	}

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAddCategory(Request $request) {
    	$category = new categoryModel;
    	$category->name = $request->txtname;
		$category->save();
		return redirect()->route('admin.category.getListCategory');
    }
    public function getDeleteCategory($id) {
		$category = categoryModel::find($id);
		$category->delete($id);
		return back();
	}

	public function getEditCategory($id) {
		$category = categoryModel::select('id','name')->get()->toArray();
		$category = categoryModel::find($id);
		return view('admin.category.edit',compact('category'));
	}

	public function postEditCategory($id,Request $request) {
		$category = categoryModel::find($id);
		$category->name = $request->input('txtname');
		$category->save();
		return redirect()->route('admin.category.getListCategory')->with('success','Sửa sản phẩm thành công!');
	}
}

	

