<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCuponesBanner4 extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones_banner', function($table)
        {
            $table->integer('activo')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones_banner', function($table)
        {
            $table->integer('activo')->unsigned(false)->change();
        });
    }
}
