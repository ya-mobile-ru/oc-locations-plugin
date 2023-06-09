<?php

namespace Yamobile\Locations\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Locations\Models\PageSettings;

class PageSettingsComponent extends ComponentBase
{
    public $settings;

    public function componentDetails()
    {
        return [
            'name' => 'yamobile.locations::lang.components.page_settings.name',
            'description' => 'yamobile.locations::lang.components.page_settings.description'
        ];
    }

    public function onRun()
    {
        $this->settings = $this->getSettings();
    }

    public function getSettings()
    {
        return [
            'image' => PageSettings::get('image'),
            'heading' => PageSettings::get('heading'),
            'description' => PageSettings::get('description'),
            'meta_title' => PageSettings::get('meta_title'),
            'meta_description' => PageSettings::get('meta_description'),
            'meta_keywords' => PageSettings::get('meta_keywords'),
        ];
    }
}
