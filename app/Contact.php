<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'type', 'body'
    ];
   
   static $types = [
        'About Jr Camp', 'About family camp', 'Others'
    ];
}