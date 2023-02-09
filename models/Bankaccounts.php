<?php namespace NielsVanDenDries\Toolkit\Models;

use Model;

/**
 * Model
 */
class Bankaccounts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_toolkit_accounts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
