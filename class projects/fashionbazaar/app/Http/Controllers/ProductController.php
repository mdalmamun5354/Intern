<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function showOne($id) {
        $data['product'] = Product::where('id', $id)->first();

        return view('frontend.product', $data);
    }

    public function showList() {
        $products = Product::all();
        return view('frontend.products', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'category' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product) {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'category' => 'required',
            'price' => 'required|numeric'
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully.');
    }
}
