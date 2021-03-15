<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class SavePostRequest extends FormRequest
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
            'title' => [
                'required',
                'max:255',
                // Rule::unique('posts')->ignore($this->id)
            ],
            'short_desc' => [
                'required',
                'max:255',
            ],
            'author' => [
                'required',
                'max:50',
            ],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'content' => 'required'
        ];
    }

    /**
     * Custom messages
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tên danh mục',
            'title.min' => 'Phải lớn hơn 6 ký tự',
            'title.max' => 'Phải nhỏ hơn 255 ký tự',
            // 'title.unique' => 'Tên danh mục đã tồn tại trên hệ thống',
            'image.required' => 'Vui lòng chọn ảnh',
            'image.image' => 'Phải chọn đúng định dạng ảnh',
            'short_desc.required' => 'Vui lòng nhập miêu tả ngắn',
            'author.required' => 'Vui lòng nhập tên tác giả',
            'content' => 'Vui lòng nhập nội dung bài viết'
        ];
    }
    /**
     * Custom attribute
     * @return array
     */
}
