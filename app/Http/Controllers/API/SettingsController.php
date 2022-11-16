<?php

namespace App\Http\Controllers\API;

use App\Filament\Settings\GeneralSettings;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{

    public function index(GeneralSettings $settings)
    {
        return [
            'site_name' => $settings->site_name,
            'site_description' => $settings->site_description,
            'phone' => $settings->phone,
            'whatsapp' => $settings->whatsapp,
            'telegram' => $settings->telegram,
            'vk' => $settings->vk,
            'address' => $settings->address,
            'email' => $settings->email,
            'inn' => $settings->inn,
            'schedule' => $settings->schedule,
            'og_image' => url('/') . '/storage/' . $settings->og_image,
        ];
    }
}
