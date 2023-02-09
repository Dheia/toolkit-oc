<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesToolkitFinance3 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_toolkit_finance', function($table)
        {
            $table->string('ordernr');
            $table->renameColumn('scope', 'invoicenr');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_toolkit_finance', function($table)
        {
            $table->dropColumn('ordernr');
            $table->renameColumn('invoicenr', 'scope');
        });
    }
}
