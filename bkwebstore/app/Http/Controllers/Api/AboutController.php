<?php

namespace App\Http\Controllers;

use App\Models\AboutCard;
use App\Models\AboutHeroSection;
use App\Models\Statistic;
use App\Models\WhyChooseUs;

class AboutController extends Controller
{
    public function index()
    {$hero = AboutHeroSection::first();

        $cards = AboutCard::all();

        $whyChoose = WhyChooseUs::with('points')->first();

        $statistics = Statistic::all();

        return response()->json([
            'hero_section' => [
                'description' => $hero?->description,
                'image' => $hero?->image,
            ],

            'cards' => $cards,

            'why_choose_us' => [
                'title' => $whyChoose?->title,

                'points' => $whyChoose
                    ? $whyChoose->points->pluck('point')
                    : [],
            ],

            'statistics' => $statistics,
        ]);
    }
}