<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            for ($i = 1; $i < 25; $i++) {
                Product::create([
                    'category_id' => $category->id,
                    'title' => fake()->firstName(),
                    'desc' => fake()->word(15, true),
                    'price' => rand(20, 1900),
                    'image' => null
                ]);
            }
        }
    }
}
