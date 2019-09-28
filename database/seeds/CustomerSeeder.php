<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'name' => 'Rani',
            'address' => 'Medan Petisa'
        ]);

        Customer::create([
            'name' => 'Astrid',
            'address' => 'Medan Sunggal'
        ]);
    }
}
