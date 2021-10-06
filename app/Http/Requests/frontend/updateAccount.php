<?php

namespace App\Http\Requests\frontend;

use Illuminate\Foundation\Http\FormRequest;

class updateAccount extends FormRequest
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
            'first_name'=>'required|',
            'middle_name' => 'required',
            'last_name' => 'required|',
            'avatar' => 'image',
            'email' => 'required|email',
            'address' => 'required|',
        ];
    }
    public function attributes(){
        return [  
            
              'password' => 'Mật Khẩu',
              'first_name'=>'Họ',
              'middle_name' => 'Tên đệm',
              'last_name' => 'Tên',
              'avatar' => 'Ảnh Đại Diện',
              'email' => 'Tài Khoản Mail',
              'address' => 'Địa Chỉ', 
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
