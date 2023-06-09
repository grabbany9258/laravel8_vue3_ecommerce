<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 50; $i++) {
            $price = rand(80, 150);
            Product::create([
                'name' => Str::random(10),
                'slug' => Str::random(5),
                'description' => Str::random(30),
                'image_name' => 'no_image.jpg',
                'price' => $price,
                'sales_price' => $price - 10,
            ]);
        }
    }
}
