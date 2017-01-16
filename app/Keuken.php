<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuken extends Model
{
	protected $table = 'Keuken';
	// protected $fillable = [
 //        'keuken'
 //    ];
    public function recept()
    {
    	return $this->hasMany(Recept::class);
    }
}
