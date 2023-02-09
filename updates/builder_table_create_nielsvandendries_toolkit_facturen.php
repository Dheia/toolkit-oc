<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesToolkitFacturen extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_toolkit_facturen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('klant_naam');
            $table->string('klant_adres');
            $table->string('klant_postcode');
            $table->string('klant_plaats');
            $table->string('factuur_nummer');
            $table->string('factuur_datum');
            $table->string('artikel_aantal');
            $table->string('artikel_benaming');
            $table->string('artikel_prijs');
            $table->string('artikel_btw');
            $table->string('factuur_inc_btw');
            $table->string('factuur_ex_btw');
            $table->string('factuur_btw_som');
            $table->string('factuur_voettekst');
            $table->string('factuur_titel');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_toolkit_facturen');
    }
}
