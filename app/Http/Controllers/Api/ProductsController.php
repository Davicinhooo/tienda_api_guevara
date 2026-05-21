<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductsResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return ProductsResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = Products::create($request->validate());
        return new ProductsResource($products);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Products::findOrFail($id);
        return new ProductsResource($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Products::findOrFail($id);
        $products->update($request->validate());
        return new ProductsResource($products);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::findOrFail($id);
        $products->delete();
        return response()->json(null, 204);
    }
}
