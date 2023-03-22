<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Smartphones',
                'slug' => 'smartphones'
            ],
            [
                'name' => 'Laptops',
                'slug' => 'laptops'
            ],
            [
                'name' => 'Tablets',
                'slug' => 'tablets'
            ],
            [
                'name' => 'Wearables',
                'slug' => 'wearables'
            ],
        ];

        foreach ($categories as  $category) {
            Category::create($category);
        }
    }
}
