<?php
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class RegiAgency extends Model
{
    protected $fillable = [
        'agency_name', 'program', 'term', 'student_name', 'parent_name', 'nationality', 'student_age', 'parent_age', 'residence', 'phone_number', 'email'
    ];
    static $programs = [
        'Jr Camp', 'family camp'
    ];
    static $terms = [
        'two weeks', 'three weeks', 'four weeks'
    ];
}