<?php namespace Eduard\Descuentos\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEduardDescuentosCuponesBanner extends Migration
{
    public function up()
    {
        Schema::rename('eduard_descuentos_cupones_html', 'eduard_descuentos_cupones_banner');
    }
    
    public function down()
    {
        Schema::rename('eduard_descuentos_cupones_banner', 'eduard_descuentos_cupones_html');
    }
}
