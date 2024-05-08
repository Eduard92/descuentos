<?php namespace Eduard\Descuentos\Models;

use Model;

/**
 * Model
 */
class Banner extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'eduard_descuentos_cupones_banner';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
