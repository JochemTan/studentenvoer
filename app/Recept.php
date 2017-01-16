<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    protected $fillable = ['naam', 'beschrijving','bereidingstijd','ingredient','stappen','personen'];
	protected $table = 'Recept';
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function categorie()
    {
    	return $this->belongsTo(Categorie::class);
    }
    public function keuken()
    {
    	return $this->belongsTo(Keuken::class);
    }
}
