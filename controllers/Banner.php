<?php namespace Eduard\Descuentos\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Banner extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'descuentos.admin' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Eduard.Descuentos', 'descuentos', 'side-menu-banner');
    }
}
