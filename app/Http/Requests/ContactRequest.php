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
            'type.*' => 'in:About Jr Camp,About family camp,Others',
            'name' => 'required|max:225',
            'email' => 'required|email',
            'body' => 'required|max:1000'
        ];
    }
    public function attributes() {
        return [
            'type' => __('messages.Con_content3'),
            'name' => __('messages.Con_content1'),
            'email' => __('messages.Con_content2'),
            'body' => __('messages.Con_content4')
        ];
    }
}