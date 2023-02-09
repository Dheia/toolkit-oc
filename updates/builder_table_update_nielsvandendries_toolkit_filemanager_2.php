<?php namespace NielsVanDenDries\Toolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesToolkitFilemanager2 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_toolkit_filemanager', function($table)
        {
            $table->string('file_upload', 4095)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_toolkit_filemanager', function($table)
        {
            $table->dropColumn('file_upload');
        });
    }
}
