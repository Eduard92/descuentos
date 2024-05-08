<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCupones3 extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->text('aplica_dias')->nullable(false)->unsigned(false)->default('all')->change();
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones', function($table)
        {
            $table->string('aplica_dias', 50)->nullable(false)->unsigned(false)->default('all')->change();
        });
    }
}
