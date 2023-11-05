<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'gender.required' => '選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'address.required' => '住所を入力してください',
            'content.required' => '必須項目です',
            'content.max' => '120文字以内で入力してください',
        ];
    }

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
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'gender' => ['required'],
            'postcode' => ['required'],
            'address' => ['required'],
            'content' => ['required', 'max:120'],
        ];
    }
}
