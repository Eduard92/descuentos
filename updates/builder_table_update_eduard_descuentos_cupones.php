<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCupones extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->integer('count');
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->dropColumn('count');
        });
    }
}
