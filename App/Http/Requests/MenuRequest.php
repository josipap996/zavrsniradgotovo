<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        if(request()->has('id')){
            return ["name" => "required|unique:tbl_menu,name,".request()->id, "route" => "required", 'link'=>'required'];
        }else{
            return ["name" => "required|unique:tbl_menu", "route" => "required", 'link'=>'required'];
        }
    }
}
