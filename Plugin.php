<?php

namespace Yamobile\Locations;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
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
            ],
            'page' => [
                'label' => 'yamobile.locations::lang.settings.page.label',
                'description' => 'yamobile.locations::lang.settings.page.description',
                'category' => 'yamobile.locations::lang.settings.page.category',
                'icon' => 'icon-map-marker',
                'class' => \Yamobile\Locations\Models\PageSettings::class,
                'order' => 500,
                'keywords' => 'yamobile.locations::lang.settings.page.keywords'
            ],
        ];
    }

    public function registerComponents()
    {
        return [
            \Yamobile\Locations\Components\DetailsComponent::class => 'Details',
            \Yamobile\Locations\Components\LocationsComponent::class => 'Locations',
            \Yamobile\Locations\Components\LocationComponent::class => 'Location',
            \Yamobile\Locations\Components\PhonesComponent::class => 'Phones',
            \Yamobile\Locations\Components\LocationSettingsComponent::class => 'LocationSettings',
            \Yamobile\Locations\Components\PageSettingsComponent::class => 'PageSettings',
        ];
    }
}
