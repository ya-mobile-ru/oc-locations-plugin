<?php

namespace Yamobile\Locations\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Locations\Models\Detail;

class DetailsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.locations::lang.components.details.name',
            'description' => 'yamobile.locations::lang.components.details.description',
        ];
    }

    public function getAll()
    {
        $details = Detail::get();

        return $details;
    }
}
