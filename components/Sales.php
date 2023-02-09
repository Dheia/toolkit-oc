<?php namespace NielsVanDenDries\Toolkit\Components;

use Cms\Classes\ComponentBase;

/**
 * Sales Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Sales extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'sales Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
