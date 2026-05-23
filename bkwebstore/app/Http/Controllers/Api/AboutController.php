<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AboutCard;
use App\Models\AboutFeature;
use App\Models\AboutSection;
use App\Models\AboutStatistic;

class AboutController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,

            'data' => [

                'hero_section' => AboutSection::first(),

                'cards' => AboutCard::all(),

                'why_choose_us' => [
                    'title' => 'Why Choose Us?',
                    'points' => AboutFeature::pluck('title')
                ],

                'statistics' => AboutStatistic::all()

            ],

            'message' => 'About page data fetched successfully'
        ], 200);
    }
}