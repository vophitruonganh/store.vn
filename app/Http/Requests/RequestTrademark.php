<?php

namespace Xstore\Http\Requests;
use Xstore\Models\TaTrademark;
use Illuminate\Foundation\Http\FormRequest;

class RequestTrademark extends FormRequest
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
            'name' => 'required|min:1|unique:trademarks',
            'url' => 'required|min:1',
            'image' => 'required|min:5',
            'category' => 'required',
            'active' => 'required|min:1',
        ];
    }

    /**
     * [rules description]
     * @return [type] [description]
     */
    public function messages()
    {
        return [
            'name.required' => 'Chưa nhập tên hãng sản xuất',
            'name.min' => 'Tên hãng sản xuất quá ngắn',
            'name.unique' => 'Hãng sản xuất đã tồn tại',
        ];
    }
}
