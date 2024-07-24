<?php

namespace Database\Seeders;

use App\Models\Dish;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dish::create([
            'name' => 'Lẫu thái',
            'category_id' => '1',
            'slug' => 'lau-thai',
            'description' => 'bét seo lơ',
            'price' => '10000000',
            'image' => '123.png'
        ]);
    }
}
