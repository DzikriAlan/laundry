<?php

use Illuminate\Database\Seeder;
use App\User;

class UserHasRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1); //AMBIL USER BERDASARKAN ID
        $user->syncRoles(1); //SET ROLE UNTUK USER TERKAIT
    }
}
