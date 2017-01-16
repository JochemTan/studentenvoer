<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Recept', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->text('beschrijving');
            $table->string('bereidingstijd');
            $table->text('ingredient');
            $table->text('stappen');
            $table->string('personen');
            $table->string('afbeelding');
            $table->integer('rating');
            $table->integer('keuken_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Recept');
    }
}
