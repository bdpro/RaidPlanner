<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
        protected $fillable = [ 'lien_video','lien_FFlogs','commentaire','id_user','id_event'
    ];
}
