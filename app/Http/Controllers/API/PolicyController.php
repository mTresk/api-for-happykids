<?php

namespace App\Http\Controllers\API;

use App\Filament\Settings\PolicySettings;
use App\Http\Controllers\Controller;

class PolicyController extends Controller
{
    public function index(PolicySettings $settings)
    {
        return [
            'title' => $settings->title,
            'text' => $settings->text,
        ];
    }
}
