<?php

namespace Yamobile\Locations\Models;

use Model;
use Yamobile\Locations\Models\Phone;

/**
 * Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sortable;

    protected $dates = [
        'deleted_at',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_locations_locations';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'country' => 'required',
        'locality' => 'required',
        'region' => 'required',
        'street' => 'required',
    ];

    public $belongsToMany = [
        'phones' => [
            Phone::class,
            'table' => 'yamobile_locations_locations_phones',
            'order' => 'name',
        ],
    ];
}
