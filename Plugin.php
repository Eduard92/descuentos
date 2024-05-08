<?php namespace Eduard\Descuentos;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
           'Eduard\Descuentos\Components\Banners' => 'banners'
              ];
    }

    public function registerSettings()
    {

    }
}
