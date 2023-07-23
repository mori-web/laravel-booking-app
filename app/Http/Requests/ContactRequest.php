<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
          'title'=> 'required|max:255',
          'name'=> 'required|max:50',
          'email'=> 'required|max:100',
          'status' => '',
          'message'=> 'required|max:1000',
        ];
    }

    public function messages()
    {
      return [
        'title.required' => '《タイトルは必ず書いてください》',
        'title.max' => '《255文字以下で指定してください》',
        'name.required' => '《名前は必ず書いてください》',
        'name.max' => '《50文字以下で指定してください》',
        'email.required' => '《メールアドレスは必ず書いてください》',
        'email.max' => '《100文字以下で指定してください》',
        'message.required' => '《内容は必ず書いてください》',
        'message.max' => '《1000文字以下で指定してください》',
      ];
    }
}
