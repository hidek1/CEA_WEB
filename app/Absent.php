<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absent extends Model
{
    protected $fillable = [
        'user_id','emailto', 'fromemail', 'subject', 'reason','name', 'date_absent'
    ];
}
