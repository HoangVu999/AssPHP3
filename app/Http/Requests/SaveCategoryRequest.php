<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class SaveCategoryRequest extends FormRequest
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
            'name' => [
                'required',
                'min:4',
                'max:255',
                Rule::unique('categories')->ignore($this->id)
            ],
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ];
    }

    /**
     * Custom messages
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục',
            'name.min' => 'Phải lớn hơn 6 ký tự',
            'name.max' => 'Phải nhỏ hơn 255 ký tự',
            'logo.image' => 'Phải chọn đúng định dạng ảnh',
            'name.unique' => 'Tên danh mục đã tồn tại trên hệ thống',
            'logo.required' => 'Vui lòng chọn logo đại diện',

        ];
    }

    /**
     * Custom attribute
     * @return array
     */
}
