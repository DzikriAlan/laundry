<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class); // TAMBAHKAN LINE INI
        $this->call(OutletTableSeeder::class); // TAMBAHKAN LINE INI
        $this->call(CustomerTableSeeder::class); // TAMBAHKAN LINE INI
        $this->call(LaundryTypeTableSeeder::class); // TAMBAHKAN LINE INI
        $this->call(RoleTableSeeder::class); // TAMBAHKAN LINE INI
        $this->call(PermissionTableSeeder::class); // TAMBAHKAN LINE INI
        $this->call(RoleHasPermissionTableSeeder::class); // TAMBAHKAN LINE INI
    }
}
