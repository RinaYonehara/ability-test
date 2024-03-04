<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first-name' => ['required'],
            'last-name' => ['required'],
            'gender' =>['required'],
            'email' => ['required', 'email'],
            'tel' => ['required', 'digits:5'],
            'address' => ['required'],
            'detail' => ['required'],
            'content' => ['required', 'max:120'],
        ];
    }
    public function messages()
    {
        return [
            'first-name.required' => '性を入力してください',
            'last-name.required' => '名を入力してください',
            'gender.required' => '性別を選択して下さい',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.digits' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'content.max' => 'お問い合わせ内容は120文字以内で入力して下さい'
        ];
    }
}
