<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class storePost extends FormRequest
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
            'title' =>'required|min:1',
            'content'=>'required|',
            'release_date' => 'required|date',
            'userid_create' => 'required|',
            'image' => 'image',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute quá ngắn',
            'release_date.date' => 'Sai định dạng Ngày Tháng',
            'avatar.image' =>'avater phải là ảnh'

        ];
    }
}
