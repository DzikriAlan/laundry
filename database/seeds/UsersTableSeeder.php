<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [ 'name' => 'Dzikri Alan', 'email' => 'admin@laundry.id', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'role' => 0 ],
            [ 'name' => 'Aulia Harvy', 'email' => 'courier1@laundry.id', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'role' => 3 ],
            [ 'name' => 'Aditya Fathur', 'email' => 'courier2@laundry.id', 'email_verified_at' => now(), 'password' => Hash::make('password'), 'role' => 3 ],
        ];

        foreach($user as $row){
            User::create($row);
        }
    }
}
