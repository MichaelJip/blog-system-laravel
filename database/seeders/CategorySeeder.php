<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Web design',
            'slug' => 'web-design',
            'color' => 'bg-red-200',
        ]);
        Category::create([
            'name' => 'Mobile design',
            'slug' => 'mobile-design',
            'color' => 'bg-green-200',
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'bg-blue-200',
        ]);
    }
}
