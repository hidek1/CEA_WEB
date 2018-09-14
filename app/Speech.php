<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speech extends Model
{
    protected $fillable = [
        'user_id', 'name', 'size', 'type'
    ];
}
