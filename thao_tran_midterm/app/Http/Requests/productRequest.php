<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code'          => 'required|unique:products,code',
            'name'          => 'required|unique:products,name',
            'image'         => 'required|image',
            'price'         => 'required|numeric',
            'oldprice'      => 'required|numeric',
            'cate_id'       => 'required|numeric'
        ];
    }
    
    public function messages() {
        return [
            'name.required'=>'Vui long nhap ten cua ban',
            'name.unique'=>'Tai khoan nay da ton tai',
            'alias.required'=>'Vui long nhap lai ten alias',
            'txtimage.required' => 'Vui lòng chọn ảnh cho sản phẩm!',
            'txtimage.image' => 'Hình ảnh không đúng định dạng!',
        ];   
    }
    
}
