<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requestForm extends Model
{
    protected $fillable = [
        'user_id','emailto', 'fromemail', 'subject', 'reason','name', 'issue'
    ];
}
