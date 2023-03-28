<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'iPhone X',
                'description' => 'The iPhone from Apple',
                'price' => 999,
                'image_url' => 'https://product.hstatic.net/200000489025/product/thumb-x_7d91aa4f8d5b48a1ba6720bbaee9238f.png',
                'brand' => 'Apple',
                'model' => 'X',
                'category_id' => 1,
            ],
            [
                'name' => 'Samsung Galaxy S9',
                'description' => 'The Galaxy phone from Samsung',
                'price' => 899,
                'image_url' => 'https://www.viettablet.com/images/thumbnails/480/516/detailed/26/samsung-galaxy-s9-cu-viettablet.jpg',
                'brand' => 'Samsung',
                'model' => 'Galaxy S',
                'category_id' => 1,
            ],
            [
                'name' => 'Google Pixel 2',
                'description' => 'The Pixel phone from Google',
                'price' => 799,
                'image_url' => 'https://cdn.tgdd.vn/Products/Images/42/106464/google-pixel-2-1-300x300.jpg',
                'brand' => 'Google pixel',
                'model' => 'Pixel',
                'category_id' => 1,
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
