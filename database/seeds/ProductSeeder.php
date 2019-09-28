<?php

use Illuminate\Database\Seeder;
use App\Product;

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
            'name' => 'Huawei Pro 50 5g',
            'price' => '12500000',
            'stock' => '7',
        ]);

        Product::create([
            'name' => 'Huawei Pro 50 ',
            'price' => '11500000',
            'stock' => '5',
        ]);
    }
}
