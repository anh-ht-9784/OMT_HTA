<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'username' =>'required|min:5|max:30' ,
            'first_name'=>'required|',
            'middle_name' => 'required',
            'last_name' => 'required|',
            'avatar' => 'file|image',
            'avatar' => 'file|image',
            'email' => 'required|email',
            'address' => 'required|',
          
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'max' => ':attribute quá dài',
            'min' => ':attribute quá ngắn',
            

        ];
    }
}
