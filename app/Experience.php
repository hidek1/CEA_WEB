<?php
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Experience extends Model
{
    protected $fillable = [
        'user_id','best_experience', 'hardest_experience', 'memorable_experience', 'improvement', 'recommend'
    ];
}