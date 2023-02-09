<?php namespace NielsVanDenDries\Toolkit\Models;

use Model;

/**
 * Model
 */
class FileManager extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'NielsVanDenDries_toolkit_filemanager';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'file_upload' => \System\Models\File::class
    ];

    
}
