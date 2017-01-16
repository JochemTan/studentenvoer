<?php

use Illuminate\Database\Seeder;
use App\Keuken;

class keuken_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keuken::create(array(
        	'naam' => 'Italiaans',
        ));
        Keuken::create(array(
        	'naam' => 'Mexicaans',
        ));
        Keuken::create(array(
        	'naam' => 'Japans',
        ));
    }
}
