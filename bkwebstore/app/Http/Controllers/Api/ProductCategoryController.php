<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
    public function index()
    {
        return response()->json(
            ProductCategory::latest()->get()
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category = ProductCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Category created',
            'data' => $category
        ], 201);
    }

    public function show($id)
    {
        return response()->json(
            ProductCategory::findOrFail($id)
        );
    }

    public function update(Request $request, $id)
    {
        $category = ProductCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Category updated',
            'data' => $category
        ]);
    }

    public function destroy($id)
    {
        ProductCategory::findOrFail($id)->delete();

        return response()->json([
            'message' => 'Category deleted'
        ]);
    }
}