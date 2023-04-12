<?php

namespace Yamobile\Locations\Models;

use Model;

/**
 * Model
 */
class Detail extends Model
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
    public $table = 'yamobile_locations_details';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'value' => 'required',
    ];
}
