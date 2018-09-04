<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eassay extends Model
{
    protected $fillable = [
        'user_id', 'img_name', 'size'
    ];
}
