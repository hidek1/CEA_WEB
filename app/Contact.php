<?php
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Contact extends Model
{
    protected $fillable = [
        'type', 'name', 'email', 'body'
    ];
    static $types = [
        'Jr Campについて', 'family campについて', 'その他'
    ];
}