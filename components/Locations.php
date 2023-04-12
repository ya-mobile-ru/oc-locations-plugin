<?php

namespace Yamobile\Locations\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Locations\Models\Location;

class Locations extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.locations::lang.components.locations.name',
            'description' => 'yamobile.locations::lang.components.locations.description',
        ];
    }

    public function getAll()
    {
        $locations = Location::all();

        return $locations;
    }
}
