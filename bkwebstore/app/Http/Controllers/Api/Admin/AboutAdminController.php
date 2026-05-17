<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutCard;
use App\Models\AboutSection;
use Illuminate\Http\Request;
use App\Http\Resources\AboutResource;

class AboutAdminController extends Controller
{
    public function index()
    {
       return new AboutResource([
    'hero_section' => AboutSection::first(),
    'cards' => AboutCard::all(),
]);
    }

    public function updateHero(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $hero = AboutSection::first();

        $hero->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return response()->json([
            'message' => 'Hero section updated successfully'
        ]);
    }

    public function storeCard(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $card = AboutCard::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return response()->json([
            'message' => 'Card created successfully',
            'data' => $card
        ]);
    }

    public function updateCard(Request $request, $id)
    {
        $card = AboutCard::findOrFail($id);

        $card->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return response()->json([
            'message' => 'Card updated successfully'
        ]);
    }

    public function deleteCard($id)
    {
        $card = AboutCard::findOrFail($id);

        $card->delete();

        return response()->json([
            'message' => 'Card deleted successfully'
        ]);
    }
}