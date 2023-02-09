<?php namespace NielsVanDenDries\Toolkit\Models;

use Model;

/**
 * Model
 */
class Finance extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'NielsVanDenDries_toolkit_finance';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'factuur' => \System\Models\File::class
    ];
}
