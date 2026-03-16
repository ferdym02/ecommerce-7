<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Laptop ASUS ROG',
                'description' => 'Laptop gaming performa tinggi dengan RTX.',
                'price' => 18000000,
                'stock' => 10,
                'image' => 'laptop.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mouse Gaming Logitech',
                'description' => 'Mouse gaming RGB dengan sensor presisi tinggi.',
                'price' => 350000,
                'stock' => 25,
                'image' => 'mouse.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keyboard Mechanical',
                'description' => 'Keyboard mechanical dengan switch blue.',
                'price' => 750000,
                'stock' => 15,
                'image' => 'keyboard.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headset Gaming',
                'description' => 'Headset gaming dengan surround sound.',
                'price' => 500000,
                'stock' => 20,
                'image' => 'headset.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
