<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request\StoreCategorytRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {

        $categories = Category::simplePaginate(5);
        return view('category.index')->with([
            'categories'=>$categories
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(StoreCategorytRequest $request)
    {
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('category-images', $name);
        }

        $category = Category::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'image'=>$path ?? null
        ]);
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('category.show')->with([
           'category' => $category
        ]);
    }

    public function edit(Category $category)
    {
        return view('category.edit')->with([
           'category' => $category
        ]);
    }

    public function update(StoreCategorytRequest $request, Category $category)
    {
        if ($request->hasFile('image')) {
            if (isset($product->image)) {
                Storage::delete($product->image);
            }
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('category-images', $name);
        }
        $category->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'image'=>$path ?? $category->image
        ]);
        return redirect()->route('categories.show', ['category'=>$category]);
    }

    public function destroy(Category $category)
    {
        if ($category->image) {
            Storage::delete($category->image);
        }
        $category->delete();
        return to_route('products.index');
    }
}
