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
            'agency_name' => __('messages.Re_content1'),
            'program' => __('messages.Re_content2'),
            'term' => __('messages.Re_content3'),
            'student_name' => __('messages.Re_content5'),
            'parent_name' => __('messages.Re_content6'),
            'nationality' => __('messages.Re_content7'),
            'student_age' => __('messages.Re_content8'),
            'parent_age' => __('messages.Re_content9'),
            'residence' => __('messages.Re_content10'),
            'phone_number' => __('messages.Re_content11'),
            'email' => __('messages.Re_content12'),
        ];
    }
}