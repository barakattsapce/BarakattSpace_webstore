<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;
use App\Models\AboutCard;
use App\Models\AboutFeature;
use App\Models\AboutStatistic;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        AboutSection::create([
            'title' => 'About Barakaat',
            'description' => 'Barakaat is a platform for buying ready-made websites and custom development services.',
            'image' => 'about.png'
        ]);

        AboutCard::insert([
            [
                'title' => 'Our Mission',
                'description' => 'To provide high-quality websites at affordable prices.',
                'icon' => 'mission.png'
            ],
            [
                'title' => 'Our Vision',
                'description' => 'To become the leading marketplace globally.',
                'icon' => 'vision.png'
            ],
            [
                'title' => 'Our Value',
                'description' => 'Quality, Trust, Support and Satisfaction.',
                'icon' => 'value.png'
            ]
        ]);

        AboutFeature::insert([
            ['title' => 'Modern and Responsive Designs'],
            ['title' => 'Affordable Pricing'],
            ['title' => '24/7 Support'],
            ['title' => '100% Satisfaction']
        ]);

        AboutStatistic::insert([
            ['key' => 'websites_sold', 'value' => '1000+'],
            ['key' => 'happy_customers', 'value' => '800+'],
            ['key' => 'templates', 'value' => '50+'],
            ['key' => 'support', 'value' => '24/7']
        ]);
    }
}