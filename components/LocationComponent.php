<?php

namespace Yamobile\Locations\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Locations\Models\Location;

class LocationComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'yamobile.locations::lang.components.location.name',
            'description' => 'yamobile.locations::lang.components.location.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'yamobile.locations::lang.components.location.properties.slug.title',
                'description' => 'yamobile.locations::lang.components.location.properties.slug.description',
                'default'     => '{{ :slug }}',
                'type'        => 'string',
            ],
        ];
    }

    public function get()
    {
        $slug = $this->property('slug');

        $location = Location::where('slug', $slug)->first();
        
        return $location;
    }
}
