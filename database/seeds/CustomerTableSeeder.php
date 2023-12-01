<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = [
            [ 'nik' => '1111111111111', 'name' => 'Aulia Harvy', 'address' => 'Jl. Fatahilah', 'phone' => '087719270783', 'point' => 0, 'deposit' => 0 ],
            [ 'nik' => '2222222222222', 'name' => 'Aditya Fathur', 'address' => 'Jl. Imam Bonjol', 'phone' => '081219899265', 'point' => 0, 'deposit' => 0 ],
        ];

        foreach($customer as $row){
            Customer::create($row);
        }
    }
}
