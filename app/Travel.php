<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
     protected $fillable = [
        'user_id','emailto', 'fromemail', 'subject', 'reason','name', 'travel_start_date', 'travel_end_date'
    ];
}
