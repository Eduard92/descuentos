<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCuponesHtml extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones_html', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('created_by')->nullable();
            $table->renameColumn('hrml', 'html');
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones_html', function($table)
        {
            $table->dropColumn('id');
            $table->dropColumn('created_by');
            $table->renameColumn('html', 'hrml');
        });
    }
}
