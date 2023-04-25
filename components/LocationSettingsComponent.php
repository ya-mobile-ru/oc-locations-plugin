<?php

namespace Yamobile\Locations\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Locations\Models\LocationSettings;

class LocationSettingsComponent extends ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.locations::lang.components.location_settings.name',
            'description' => 'yamobile.locations::lang.components.location_settings.description'
        ];
    }

    public function onRun()
    {
        $this->settings = $this->getSettings();
    }

    public function getSettings()
    {
        return [
            'logo' => LocationSettings::get('logo'),
            'favicon' => LocationSettings::get('favicon'),
            'name' => LocationSettings::get('name'),
            'description' => LocationSettings::get('description'),
            'phone' => LocationSettings::get('phone'),
            'email' => LocationSettings::get('email'),
            'country' => LocationSettings::get('country'),
            'region' => LocationSettings::get('region'),
            'locality' => LocationSettings::get('locality'),
            'street' => LocationSettings::get('street'),
            'geo_latitude' => LocationSettings::get('geo_latitude'),
            'geo_longitude' => LocationSettings::get('geo_longitude'),
            'postal_code' => LocationSettings::get('postal_code'),
            'fax' => LocationSettings::get('fax'),
            'post_office_box' => LocationSettings::get('post_office_box'),
            'opening_hours' => LocationSettings::get('opening_hours'),
        ];
    }
}
