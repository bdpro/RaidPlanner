<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    protected $table="personnages";
    protected $fillable = ['id_user', 'id_lodestone', 'job', 'name'];
    protected $primaryKey ='id_personnage';
}
