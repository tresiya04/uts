<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matcha = Category::firstOrCreate([
            'name' => 'matcha',
            'type' => 'order',
        ]);
        Order::firstOrCreate([
            'category_id' => $matcha->id,
            'image' => '',
            'name' => 'matcha',
            'price' => '',
        ]);
    }
}
