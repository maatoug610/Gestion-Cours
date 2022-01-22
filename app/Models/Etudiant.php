<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Etudiant extends Model
{
    protected $fillable = ['cin','adresse','diplome_id','mail','nom','prenom','tel'];

    public function diplome(){
        
        return $this->belongsTo(Diplome::class);
    }
}
