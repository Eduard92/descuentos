<?php namespace Eduard\Descuentos\Components;

use Cms\Classes\ComponentBase;
use Eduard\Descuentos\Models\Banner;
use Carbon\Carbon;

class Banners extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Banner Component',
            'description' => 'Render Banner in header'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){

   
        $banner = Banner::where('activo',1)->first();



        if( $banner ){

            $today = \Carbon\Carbon::now();

            if(   $today <= $banner->valido){
                $this->page['banner'] = $banner->html;
                $this->page['bannerHtml'] = $this->renderPartial('banners::header');
            }
           
        }
        



    }

}