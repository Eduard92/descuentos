<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCupones2 extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->string('tipo', 50);
            $table->integer('monto_minimo')->nullable()->unsigned();
            $table->integer('dias_minimo')->nullable()->unsigned();
            $table->string('cupon', 25)->change();
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->dropColumn('tipo');
            $table->dropColumn('monto_minimo');
            $table->dropColumn('dias_minimo');
            $table->string('cupon', 10)->change();
        });
    }
}
