<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function recept()
    {
    	return $this->hasMany(Recept::class);
    }
}
