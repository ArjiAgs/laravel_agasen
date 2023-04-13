<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Product::create([
            'name'=> 'Beef',
            'unit'=> 'kg',
            'unitPrice' => 380,
            'category'=> 'Fresh Meat'

        ]);
        Product:: create([
            'name'=> 'Chicken',
            'unit'=> 'kg',
            'unitPrice' => 599,
            'category'=>'Fresh Meat'

        ]);
      
        Product::create([
            'name'=> 'Pork',
            'unit'=> 'kg',
            'unitPrice' => 180,
            'category'=>'Fresh Meat',
        ]);
        Product::create([
            'name'=> 'Cabagge',
            'unit'=> 'kg',
            'unitPrice' => 100,
            'category'=>'Fresh Vegetable'
        ]);
        Product::create([
            'name'=> 'Banana',
            'unit'=> 'kg',
            'unitPrice' => 55.99,
            'category'=>'Fresh Fruit'
        ]);
        Product::create([
            'name'=> 'Chicken Neck',
            'unit'=> 'kg',
            'unitPrice' => 299,
            'category'=>'Fresh Meat'
        ]);
        Product::create([
            'name'=> 'Mango',
            'unit'=> 'kg',
            'unitPrice' => 150,
            'category'=>'Fresh Fruits'
        ]);
        Product::create([
            'name'=> 'Fish',
            'unit'=> 'kg',
            'unitPrice' => 120,
            'category'=>'Fresh Meat'
        ]);
        Product::create([
            'name'=> 'Carrots',
            'unit'=> 'kg',
            'unitPrice' => 89.99,
            'category'=>'Fresh Vegetable'
        ]);
        Product::create([
            'name'=> 'Onions',
            'unit'=> 'kg',
            'unitPrice' => 100,
            'category'=>'Fresh Vegetable'
        ]);
    }
}
