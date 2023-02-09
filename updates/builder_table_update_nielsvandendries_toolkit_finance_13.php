<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesToolkitFinance13 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_toolkit_finance', function($table)
        {
            $table->string('factuur');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_toolkit_finance', function($table)
        {
            $table->dropColumn('factuur');
        });
    }
}
