<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $matcha = Category::firstOrCreate([
            'name' => 'Siti',
            'type' => 'customers',
        ]);
        Customer::firstOrCreate([
            'category_id' => $matcha->id,
            'image' => '',
            'name' => 'Siti',
            'price' => '',
        ]);
    }
}
