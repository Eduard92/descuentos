<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentos extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->date('inicio');
            $table->date('fin');
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->dropColumn('inicio');
            $table->dropColumn('fin');
        });
    }
}
