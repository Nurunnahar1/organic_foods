<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Fruits', 'Vegitables'];

        foreach ($categories as $category){
            Category::create([
                'title' => $category, 
                'slug' => Str::slug($category)
            ]);
        }
    }
}
