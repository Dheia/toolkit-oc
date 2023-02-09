<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesToolkitFinance extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_toolkit_finance', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('description');
            $table->string('withdraw');
            $table->string('deposit');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('bankaccount');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_toolkit_finance');
    }
}
