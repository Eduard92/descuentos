<?php namespace Eduard\Descuentos\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Event;

class Cupones extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Eduard.Descuentos', 'descuentos', 'side-menu-item');
    
    
        Event::listen('backend.list.injectRowClass', function ($lists, $record) {
            return $this->listInjectRowClass($record);
        });
    }



    public function listInjectRowClass($record, $definition = null)
    {
        if (!$record->activo) {
          return 'negative';
        }
        else{
            return 'positive';
        }
    }



}
