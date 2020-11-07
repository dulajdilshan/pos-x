<?php

use \App\Product;
use App\Tag;
use Illuminate\Database\Seeder;

class TagProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();
        Product::findOrFail(1)->tags()->sync($tags->where('id', '<', '3')->pluck('id'));
        $stags = $tags->filter(function ($tag) {
            return $tag->name == 'S' || $tag->id == 4;
        });
        Product::findOrFail(2)->tags()->sync($stags);
    }
}
