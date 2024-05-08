<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCuponesBanner2 extends Migration
{
    public function up()
    {
        Schema::table('eduard_descuentos_cupones_banner', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('eduard_descuentos_cupones_banner', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
