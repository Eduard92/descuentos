<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEduardDescuentosCuponesHtml extends Migration
{
    public function up()
    {
        Schema::create('eduard_descuentos_cupones_html', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('hrml');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('eduard_descuentos_cupones_html');
    }
}
