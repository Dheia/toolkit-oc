<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesToolkitAccounts extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_toolkit_accounts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('account_number');
            $table->string('firstname');
            $table->string('surname');
            $table->string('adres');
            $table->string('zipcode');
            $table->string('place');
            $table->string('bank_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_toolkit_accounts');
    }
}
