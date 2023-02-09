<?php namespace Nielsvandendries\Toolkit\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Toolkit\Models\FileManager;

/**
 * Files Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Files extends ComponentBase
{
    public $fileslist;
    
    public function componentDetails()
    {
        return [
            'name' => 'filesList',
            'description' => 'always watch the simpsons'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'file_owner' => [
                'title'             => 'File Owner',
                'description'       => 'Owner selectie',
                'type'              => 'string',
            ]
        ];
    }

    public function getOwnerOptions()
    {
        return FileManager::get()->lists('file_owner', 'file_owner');
    }

    public function onRun()
    {
        $this->fileslist = FileManager::where('file_owner', $this->property('file_owner'))->get()->toArray();

    }
}
