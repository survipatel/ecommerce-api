<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        return Product::all();
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product = Product::create($validatedData);
        return response()->json([ 'message' => 'Product Created',
            'status' => 'success',
            'data' => $product ]);
    }

    // Display the specified resource.
    public function show(Product $product)
    {
        return response()->json(['product'=>$product]);
    }

    // Update the specified resource in storage.
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product->update($validatedData);
        return response()->json([
            'message' => 'Product Updated',
            'status' => 'success',
            'data' => $product

        ]);
    }

    // Remove the specified resource from storage.
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'Product deleted',
            'status' => 'success'
            ]);
    }
}
