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
            'best_experience' => 'required|max:1000',
            'hardest_experience' => 'required|max:1000',
            'memorable_experience' => 'required|max:1000',
            'improvement' => 'required|max:1000',
            'recommend' => 'required|max:1000',
        ];
    }
    public function attributes() {
        return [
            'best_experience' => 'best experience',
            'hardest_experience' => 'hardest experience',
            'memorable_experience' => 'memorable experience',
            'improvement' => 'improvement',
            'recommend' => 'recommend',
        ];
    }
}