<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Auth;

class MenuRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        if(request()->has('id')){
            return ["name" => [
                'required',
                Rule::unique('tbl_menu', 'name')->ignore(request()->id, 'id')->where('user_id', Auth::user()->id),
            ], 
            'page_id'=>'required'
        ];
        }else{
            return ["name" =>['required',
             Rule::unique('tbl_menu', 'name')->where('user_id', Auth::user()->id),
            ],
            'page_id'=>'required'
        ];
        }
    }
}
