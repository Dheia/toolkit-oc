<?php namespace Nielsvandendries\Toolkit\Models;

use Model;

/**
 * Sales Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Sales extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'nielsvandendries_toolkit_sales';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
