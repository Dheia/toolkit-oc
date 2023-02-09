<?php namespace Nielsvandendries\Toolkit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerSettings()
    {
    }

    public function registerComponents()
    {
        return [
            'Nielsvandendries\Toolkit\Components\Files' => 'Files'
        ];
    }
}
