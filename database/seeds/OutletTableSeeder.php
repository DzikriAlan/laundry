<?php

use Illuminate\Database\Seeder;
use App\Outlet;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $outlet = [
        [ 'code' => 'A1', 'name' => 'Berkah Laundry', 'status' => 1, 'address' => 'Jl.Fatahilah', 'phone' => '087719270783' ],
        [ 'code' => 'A2', 'name' => 'Jaya Laundry', 'status' => 1, 'address' => 'Jl.Imam Bonjol', 'phone' => '081219270783' ],
        [ 'code' => 'A3', 'name' => 'Amanah Laundry', 'status' => 1, 'address' => 'Jl.Antasari', 'phone' => '082129270783' ],
      ];

      foreach($outlet as $row)
      {
        Outlet::create($row);
      }
    }
}