<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [[
            'id' => 1,
            'name' => 'Green T-Shirt',
            'item_code' => 'XS3467G',
            'description' => 'Cotton, Female',
            'quantity' => 5,
            'unit_price' => 23.5,
        ],[
            'id' => 2,
            'name' => 'Black Trouser',
            'item_code' => 'YM5638',
            'description' => 'Cotton, Male',
            'quantity' => 31,
            'unit_price' => 250.4,
        ],[
            'id' => 3,
            'name' => 'White shirt',
            'item_code' => 'XLEDTW',
            'description' => 'Cotton, Female XL',
            'quantity' => 20,
            'unit_price' => 350,
        ]];

        Product::insert($products);
    }
}
