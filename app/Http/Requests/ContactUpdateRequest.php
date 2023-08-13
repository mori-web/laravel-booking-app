<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'is_status' => 'required',
            'memo' => 'max:1000'
        ];
    }
    public function messages()
    {
        return [
          'memo.max' => '《1000文字以下で指定してください》',
        ];
    }
}
