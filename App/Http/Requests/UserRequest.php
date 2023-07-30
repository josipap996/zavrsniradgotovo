<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        if(request()->has('id')){
            return [
                "name" => "required",
                "username" => "required",
                "email" => "required|unique:users,email,".request()->id,
                "role_id" => "required",
            ];
        }else{
            return [
                "name" => "required",
                "username" => "required",
                "email" => "required|unique:users",
                "role_id" => "required",
                "password" => "required",
            ];
        }
        
    }
}
