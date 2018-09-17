<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PDF extends Model
{
    protected $fillable = [
        'user_id', 'name', 'size', 'type'
    ];
    protected $table = 'pdfs';
}