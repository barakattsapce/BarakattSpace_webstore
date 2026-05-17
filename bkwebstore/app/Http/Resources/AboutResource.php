<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'hero_section' => [
                'title' => $this['hero_section']->title,
                'description' => $this['hero_section']->description,
                'image' => $this['hero_section']->image,
            ],

            'cards' => $this['cards']->map(function ($card) {
                return [
                    'id' => $card->id,
                    'icon' => $card->icon,
                    'title' => $card->title,
                    'description' => $card->description,
                ];
            }),
        ];
    }
}