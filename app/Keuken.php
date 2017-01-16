<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuken extends Model
{
	protected $table = 'keuken';
    public function recept()
    {
    	return $this->hasMany(Recept::class);
    }
}
