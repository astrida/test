<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'kode' => 'JUAL0001',
            'tgl' => '2019-12-01',
            'customer_id' => '1',
            'product_id' => '1',
            'jumlah' => '1',
            'harga' => '12500000',
            'total' => '12500000',
            'tb' => '12500000',
        ]);
    }
}
