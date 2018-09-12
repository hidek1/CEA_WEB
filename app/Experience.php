<?php
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Experience extends Model
{
    protected $fillable = [
        'user_id','class', 'class_comment', 'teacher', 'teacher_comment', 'facility', 'facility_comment', 'activity', 'activity_comment', 'total', 'total_comment'
    ];
    static $scores = [
        '1: worse', '2: bad', '3: normal', '4: good', '5: excelent'
    ];
}