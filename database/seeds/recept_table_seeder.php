<?php

use Illuminate\Database\Seeder;

class recept_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Create::recept(array(
        	'naam' => 'Moms Spaghetti',
        	'beschrijving' => 'Retro lumbersexual bespoke pickled, austin kogi coloring book keytar whatever vice pour-over VHS kale chips snackwave chicharrones. ',
        	'bereidingstijd' => '20 minuten',
        	'ingredient' => '[{"ingredient":"Tomaten","amount":"200 gram"},{"ingredient":"gehankt","amount":"500 gram"},{"ingredient":"pasta","amount":"100 gram"}]',
        	
        	'stappen' => '["Portland narwhal mlkshk tofu, banh mi humblebrag fashion axe plaid lo-fi unicorn iceland readymade. Mlkshk waistcoat roof party, semiotics knausgaard chillwave you probably havent heard of them meditation craft beer lyft leggings "," Shabby chic la croix roof party farm-to-table, cliche live-edge chartreuse literally mumblecore vaporware meditation lo-fi. Shabby chic ramps blue bottle, +1 skateboard 8-bit lo-fi retro try-hard glossier hashtag tbh cornhole subway tile keffiyeh."]',
        	'personen' => '3 - 4',
        	'image' => 'https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.recipris.com%2Fwp-content%2Fuploads%2F2013%2F01%2Fspaghetti-with-creamy-marinara.jpg&f=1',
        	'rating' = 0,
        ));
    }
}
