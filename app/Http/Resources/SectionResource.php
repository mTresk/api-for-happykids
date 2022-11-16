<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SectionResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'sections_list' => $this->sections_list,
            'image' => [
                'full' => $this->image['full'],
                'full_webp' => $this->image['full_webp'],
                'cropped' => $this->image['cropped'],
                'cropped_webp' => $this->image['cropped_webp'],
            ]
        ];
    }
}
