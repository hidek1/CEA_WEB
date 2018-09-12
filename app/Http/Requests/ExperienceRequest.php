<?php
namespace App\Http\Requests;
 
use Illuminate\Foundation\Http\FormRequest;
 
class ExperienceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'class' => 'required|in:1: worse,2: bad,3: normal,4: good,5: excelent',
            'teacher' => 'required|in:1: worse,2: bad,3: normal,4: good,5: excelent',
            'facility' => 'required|in:1: worse,2: bad,3: normal,4: good,5: excelent',
            'activity' => 'required|in:1: worse,2: bad,3: normal,4: good,5: excelent',
            'total' => 'required|in:1: worse,2: bad,3: normal,4: good,5: excelent',
        ];
    }
    public function attributes() {
        return [
            'class' => 'about our English Class',
            'teacher' => 'about our Guardian teachers and our staffs',
            'facility' => 'about our Facilities',
            'activity' => 'about our activities',
            'total' => 'about total experience',
        ];
    }
}