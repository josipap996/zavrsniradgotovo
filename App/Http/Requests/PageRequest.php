<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        if (Request()->has("id")) {
            return [
                "name" => "required|unique:tbl_page,name,".request()->id,
                "banner_title" => "required",
                "content" => "required",
            ];
        } else {
            return [
                "name" => "required|unique:tbl_page",
                "banner_image" => "required",
                "banner_title" => "required",
                "content" => "required",
            ];
        }
    }
}
