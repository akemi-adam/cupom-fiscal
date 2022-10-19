<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Água mineral Sabas',
            'aliquot' => 0.1,
            'price' => 97,
            'inventory' => 12
        ]);

        Product::create([
            'name' => 'Sabão do Sabas',
            'aliquot' => 0.15,
            'price' => 140,
            'inventory' => 8
        ]);

        Product::create([
            'name' => 'Sabasnás',
            'aliquot' => 0.07,
            'price' => 54,
            'inventory' => 666
        ]);
    }
}
