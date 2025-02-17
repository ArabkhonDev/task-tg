<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
 
    public function run(): void
    {
        for($i = 1; $i<=10; $i++){
            Category::create([
                'title'=>fake()->firstName(),
                'desc'=>fake()->word(15, true),
                'image'=>null
            ]);
        }
    }
}
