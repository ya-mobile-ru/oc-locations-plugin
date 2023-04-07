<?php

namespace Yamobile\Locations\Models;

use Model;
use Yamobile\Locations\Models\Location;

/**
 * Model
 */
class Phone extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'yamobile_locations_phones';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'locations' => [
            Location::class,
            'table' => 'yamobile_locations_locations_phones',
            'order' => 'name',
        ],
    ];
}
