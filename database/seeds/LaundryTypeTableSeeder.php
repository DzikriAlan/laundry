<?php

use Illuminate\Database\Seeder;
use App\LaundryType;

class LaundryTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laundryType = [
            [ 'name' => 'Cuci Kering + Setrika' ],
            [ 'name' => 'Cuci Kering + Setrika + Diantar' ],
        ];

        foreach($laundryType as $row){
            LaundryType::create($row);
        }
    }
}