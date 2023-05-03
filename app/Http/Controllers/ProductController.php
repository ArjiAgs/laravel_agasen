<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.products', [
            'heading' => 'Product Catalog',
            'products' => Product::paginate(5)
        ]);
    }
    public function show(Product
     $product){
        return view('products.product',[
            'product' =>$product
        ]);
    }
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $formField = $request->validate([
            'name' => 'required|unique:products',
            'unit' => 'required',
            'unitPrice' => 'required|decimal:0,2',
            'category' => 'required',
            
        ]);

        Product::create($formField);

        return redirect('/')->with('success', 'New product saved successfully!');

    }

    public function edit(Product $product){
        return view('products.edit', ['product'=>$product]);
    }

    public function update(Product $product, Request $request){
        $formField = $request->validate([
            'name' => 'required',
            'unit' => 'required',
            'unitPrice' => 'required|decimal:0,2',
            'category' => 'required',
        ]);

        $product->update($formField);

        return redirect('/')->with('success', 'Product updated successfully!');

    }

    public function destroy(Product $product){
        $product->delete();

        return redirect('/')->with('success', 'Product deleted successfully!');
    }
}
