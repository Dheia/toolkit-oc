<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesToolkitFilemanager extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_toolkit_filemanager', function($table)
        {
            $table->string('file_description', 4095);
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_toolkit_filemanager', function($table)
        {
            $table->dropColumn('file_description');
        });
    }
}
