<?php namespace NielsVanDenDries\Toolkit\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class FileManager extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'beheerder' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Toolkit', 'main-menu-item', 'side-menu-item3');
    }
}
