<?php

namespace Yamobile\Locations\Models;

use October\Rain\Database\Model;

class PageSettings extends Model
{
    public $implement = [
        \System\Behaviors\SettingsModel::class,
    ];

    public $settingsCode = 'yamobile_locations_page_settings';

    public $settingsFields = 'fields.yaml';
}
