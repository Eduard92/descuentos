<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentos2 extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->integer('descuento')->unsigned();
            $table->text('descripcion')->nullable();
            $table->boolean('activo');
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->dropColumn('descuento');
            $table->dropColumn('descripcion');
            $table->dropColumn('activo');
        });
    }
}