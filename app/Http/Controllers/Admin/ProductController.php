<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController 
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.admin_product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'size' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'img' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        $imagePath = $request->file('img')->store('products', 'public');
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'size' => $request->size,
            'category' => $request->category,
            'img' => $imagePath,
        ]);
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'size' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->description = $request->description;
    $product->size = $request->size;
    $product->category = $request->category;
    if ($request->hasFile('img')) {
        $imagePath = $request->file('img')->store('products', 'public');
        $product->img = $imagePath;
    }
    $product->save();

    return redirect()->back()->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $product = Product::findOrFail($id);
        if ($product->img && Storage::disk('public')->exists($product->img)) {
        Storage::disk('public')->delete($product->img);
    }
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
