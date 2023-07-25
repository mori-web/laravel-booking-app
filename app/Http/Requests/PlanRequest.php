<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:200',
            'price' => 'required',
            'description' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '宿泊プラン名を入力してください',
            'price.required' => '宿泊料金を入力してください',
            'description.required' => '説明分を入力してください',
        ];
    }
}
