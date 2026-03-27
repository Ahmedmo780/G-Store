<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'AULA F75 Pro Mechanical Keyboard',
                'price' => 129.99,
                'image' => 'https://images.unsplash.com/photo-1541140532154-b024d705b90a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => 'Tri-mode mechanical keyboard with gasket mount design and custom tactile switches for ultimate precision.',
                'category' => 'Keyboards',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AULA H512 Gaming Mouse',
                'price' => 54.99,
                'image' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => '12,400 DPI optical sensor with weight tuning system and programmable buttons.',
                'category' => 'Mice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AULA S603 Gaming Headset',
                'price' => 89.99,
                'image' => 'https://images.unsplash.com/photo-1599669454699-248893623440?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => '7.1 Surround sound with noise-cancelling microphone and RGB lighting.',
                'category' => 'Headsets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ergonomic Gaming Chair Pro',
                'price' => 299.99,
                'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => 'Premium ergonomic gaming chair with lumbar support and adjustable height.',
                'category' => 'Chairs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ghost Edition TKL Keyboard',
                'price' => 149.99,
                'image' => 'https://images.unsplash.com/photo-1541140532154-b024d705b90a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => 'Minimalist tenkeyless mechanical keyboard with ice-blue LED lighting.',
                'category' => 'Keyboards',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wireless Gaming Mouse Ultra',
                'price' => 79.99,
                'image' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => 'Wireless gaming mouse with 16,000 DPI sensor and 70-hour battery life.',
                'category' => 'Mice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Studio Monitor Headphones',
                'price' => 199.99,
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => 'Professional studio headphones with active noise cancellation.',
                'category' => 'Headsets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Racing Gaming Chair',
                'price' => 249.99,
                'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80',
                'description' => 'Racing-style gaming chair with reclining backrest and footrest.',
                'category' => 'Chairs',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
