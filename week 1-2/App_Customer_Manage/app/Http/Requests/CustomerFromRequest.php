<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFromRequest extends FormRequest
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
            'name'  => 'required|min:2|max:50',
            'email' => 'required|unique:customers|min:20|max:100',
            'dob'   =>  'required|date|',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Tên là bắt buộc',
            'name.min' => 'Tên phải hơn 2 kí tự',
            'name.max' => 'Tên chỉ tối đa 50 kí tự',

        ];
        return $messages;
    }
}
