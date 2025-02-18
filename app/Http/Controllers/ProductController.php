<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        return view('product.index')->with([
            'products'=>$products
        ]);
    }

    public function create()
    {
        return view('product.create')->with([
            'categories'=>Category::all(),
        ]);
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product-images', $name);
        }
        $product = Product::create([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'image'=>$path ?? null
        ]);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('product.show')->with([
            'product'=> $product
        ]);
    }

    public function edit(Product $product)
    {
        return view('product.edit')->with([
            'product'=> $product    
        ]);
    }

    public function update(StoreProductRequest $request, Product $product)
    {
        if ($request->hasFile('image')) {
            if (isset($product->image)) {
                Storage::delete($product->image);
            }
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('product-images', $name);
        }
        $product->update([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'image'=>$path ?? $product->image
        ]);
        return redirect()->route('products.show', ['product'=>$product->id]);
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
        $product->delete();
        return to_route('products.index');
    }
}

