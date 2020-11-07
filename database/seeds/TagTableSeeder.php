<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
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
            'name' => 'XL',
        ],[
            'id' => 2,
            'name' => 'S',
        ],[
            'id' => 3,
            'name' => 'M',
        ],[
            'id' => 4,
            'name' => 'Black',
        ]];

        Tag::insert($products);
    }
}
