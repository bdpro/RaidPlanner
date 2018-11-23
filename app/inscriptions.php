<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inscriptions extends Model
{
    protected $fillable = ['job', 'message', 'date_inscription', 'id_event', 'id_user'];
    
}
