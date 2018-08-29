<?php
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class RegiAgencyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'agency_name' => 'required|max:225',
            'program' => 'required|in:Jr Camp,family camp',
            'term' => 'required|in:two weeks,three weeks,four weeks',
            'student_name' => 'required|max:225',
            'parent_name' => 'max:225',
            'nationality' => 'required|max:20',
            'student_age' => 'required|max:20',
            'parent_age' => 'max:20',
            'residence' => 'required|max:20',
            'phone_number' => 'required|max:20',
            'email' => 'required|email',
        ];
    }
    public function attributes() {
        return [
            'agency_name' => '代理店名',
            'program' => 'プログラム',
            'term' => '期間',
            'student_name' => '生徒氏名',
            'parent_name' => '保護者氏名　*ファミリーキャンプのみ',
            'nationality' => '国籍',
            'student_age' => '年齢(生徒)',
            'parent_age' => '年齢（保護者）　*ファミリーキャンプのみ',
            'residence' => '住所',
            'phone_number' => '電話番号',
            'email' => 'メールアドレス',
        ];
    }
}