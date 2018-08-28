<?php
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'type' => 'required',
            'type.*' => 'in:Jr Campについて', 'family campについて', 'その他',
            'name' => 'required|max:225',
            'email' => 'required|email',
            'body' => 'required|max:1000'
        ];
    }
    public function attributes() {
        return [
            'type' => 'お問い合わせ種類',
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'body' => '内容'
        ];
    }
}