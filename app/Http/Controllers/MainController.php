<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        return view('welcome', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }
    public function dashboard(){
        return view('dashboard');
    }
}
