<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

        ];
    }
    public function messages()
    {
      return [
        'name.required' => 'Tên danh mục không được để trống',
        'name.unique' => 'Tên danh mục đã tồn tại',
        'name.max' => 'Tên danh mục không được vượt quá 255 ký tự',
        'parent_id.required' => 'Danh mục cha không được để trống',
        'parent_id.numeric' => 'Danh mục cha phải là số',
        'description.required' => 'Mô tả không được để trống',
      ];
    }
}
