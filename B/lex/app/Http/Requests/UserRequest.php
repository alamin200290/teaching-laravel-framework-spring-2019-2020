<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'bail|required|min:4|unique:users',
            'password'=>'required',
            'cgpa'=>'required',
            'name'=>'required|email'
        ];
    }

    public function messages(){
        return [
            'username.required'=>"can't left empty!",
            'username.unique'=>":attribute must be unique!",
            'password.required'=>"can't left empty!"
        ];
    }
}
