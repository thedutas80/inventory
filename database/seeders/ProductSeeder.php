<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Product::create([
        //     'name' => 'Iphone 14',
        //     'price' => 100,
        //     'description' => Str::random(30),
        //     'image' => 'image.jpg',

        // ]);

        Product::factory(10)->create();
    }
}
