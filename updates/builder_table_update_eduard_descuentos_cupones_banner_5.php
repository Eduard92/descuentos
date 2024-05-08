<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCuponesBanner5 extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones_banner', function($table)
        {
            $table->date('valido')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones_banner', function($table)
        {
            $table->dropColumn('valido');
        });
    }
}
