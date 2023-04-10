<?php

namespace Yamobile\Locations\Models;

use October\Rain\Database\Model;

class LocationSettings extends Model
{
    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    public $settingsCode = 'yamobile_locations_location_settings';

    public $settingsFields = 'fields.yaml';
}
