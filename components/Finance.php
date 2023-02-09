<?php namespace NielsVanDenDries\Toolkit\Components;

use Cms\Classes\ComponentBase;
use NielsVanDenDries\Toolkit\Models\Finance;

/**
 * Finance Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class invoice extends ComponentBase
{
    public $invoiceitem;

    public function componentDetails()
    {
        return [
            'name' => 'finance Invoices',
            'description' => 'List Invoices'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->invoiceitem = invoice::get()->toArray();
    }
}
