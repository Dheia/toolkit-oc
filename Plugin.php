<?php namespace NielsVanDenDries\Toolkit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerSettings()
    {
    }

    public function registerComponents()
    {
        return [
            'NielsVanDenDries\Toolkit\Components\Files' => 'Files'
        ];
    }
}
