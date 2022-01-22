<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    protected $fillable = ['coef_diplome','nom'];

    public function etudiants(){

        return $this->hasMany(Etudiant::class); 
    }
    
}
