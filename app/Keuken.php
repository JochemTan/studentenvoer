<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuken extends Model
{
    public function recept()
    {
    	return $this->hasMany(Recept::class);
    }
}
