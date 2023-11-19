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
        User::create([
            'name' => 'Dzikri Alan',
            'email' => 'admin@laundry.id',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 0
        ]);
    }
}
