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
        Create::keuken(array(
        	'naam' => 'Italiaans',
        ));
        Create::keuken(array(
        	'naam' => 'Mexicaans',
        ));
        Create::keuken(array(
        	'naam' => 'Japans',
        ));
    }
}
