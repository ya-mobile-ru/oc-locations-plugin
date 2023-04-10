<?php

namespace Yamobile\Locations;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'location' => [
                'label' => 'yamobile.locations::lang.settings.location.label',
                'description' => 'yamobile.locations::lang.settings.location.description',
                'category' => 'yamobile.locations::lang.settings.location.category',
                'icon' => 'icon-map-marker',
                'class' => \Yamobile\Locations\Models\LocationSettings::class,
                'order' => 500,
                'keywords' => 'yamobile.locations::lang.settings.location.keywords'
            ]
        ];
    }
}
