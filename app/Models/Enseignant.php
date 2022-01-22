<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = ['code','grade','mail','nom','prenom','N_bureau','tel'];
}
