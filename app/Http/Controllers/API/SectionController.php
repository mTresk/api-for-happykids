<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\SectionResource;
use App\Models\Section;

class SectionController extends Controller
{
    public function index()
    {
        return new SectionResource(Section::firstOrFail());
    }
}
