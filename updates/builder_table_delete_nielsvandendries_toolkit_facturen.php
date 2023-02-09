<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesToolkitFacturen extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_toolkit_facturen');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_toolkit_facturen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('klant_naam', 255);
            $table->string('klant_adres', 255);
            $table->string('klant_postcode', 255);
            $table->string('klant_plaats', 255);
            $table->string('factuur_nummer', 255);
            $table->string('factuur_datum', 255);
            $table->string('artikel_aantal', 255);
            $table->string('artikel_benaming', 255);
            $table->string('artikel_prijs', 255);
            $table->string('artikel_btw', 255);
            $table->string('factuur_inc_btw', 255);
            $table->string('factuur_ex_btw', 255);
            $table->string('factuur_btw_som', 255);
            $table->string('factuur_voettekst', 255);
            $table->string('factuur_titel', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
