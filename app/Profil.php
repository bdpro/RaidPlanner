<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = "users";
    protected $fillable = [
        'name','email','id_lodestone','password','job'
    ]; 
    
        public function personnage(){
        
        return $this->hasOne('App\Personnage','id_user');
        
    }
}


