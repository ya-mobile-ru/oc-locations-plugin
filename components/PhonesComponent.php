<?php

namespace Yamobile\Locations\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Locations\Models\Phone;

class PhonesComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.locations::lang.components.phones.name',
            'description' => 'yamobile.locations::lang.components.phones.description',
        ];
    }

    public function getAll()
    {
        $phones = Phone::all();

        return $phones;
    }
}
