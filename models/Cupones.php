<?php namespace Eduard\Descuentos\Models;

use Model;

/**
 * Model
 */
class Cupones extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    protected $jsonable = ['aplica_dias'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'eduard_descuentos_cupones';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsToMany = [

        'ubicaciones' => [
            'Roll\Cabanas\Models\Ubicacion',
            'table'    => 'eduard_descuentos_cupones_ubicacion',
            'key'      => 'cupon_id',
            'otherKey' => 'ubicacion_id'
        ]
    ];


}


