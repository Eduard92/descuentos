<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCupones3 extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->string('aplica_dias', 50)->default('all');
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->dropColumn('aplica_dias');
        });
    }
}