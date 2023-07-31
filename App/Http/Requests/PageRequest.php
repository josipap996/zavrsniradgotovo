<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Auth;

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
                "name" => [
                    'required',
                    Rule::unique('tbl_page', 'name')->ignore(request()->id, 'id')->where('user_id', Auth::user()->id),
                ]   ,
                "banner_title" => "required",
                "content" => "required",
            ];
        } else {
            return [
                "name" =>['required',
                    Rule::unique('tbl_page', 'name')->where('user_id', Auth::user()->id),
                ],
                "banner_image" => "required",
                "banner_title" => "required",
                "content" => "required",
            ];
        }
    }
}
