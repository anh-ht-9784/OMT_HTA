<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'username' =>'required|max:12|min:1',
            'Password' => 'required|min:6|max:15',
            'first_name'=>'required|',
            'middle_name' => 'required',
            'last_name' => 'required|',
            'avatar' => 'image',
            'email' => 'required|email',
            'address' => 'required|',
            'gender' => 'required|',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'max' => ':attribute quá dài',
            'min' => ':attribute quá ngắn',
            'email.email' => 'Sai định dạng eamil',
            'email.unique' => 'Email đã tồn tại',
            'avatar.image' =>'avater phải là ảnh'

        ];
    }
}
