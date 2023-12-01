<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [ 'name' => 'superadmin', 'guard_name' => 'web' ],
            [ 'name' => 'admin', 'guard_name' => 'web' ],
            [ 'name' => 'finance', 'guard_name' => 'web' ],
            [ 'name' => 'courier', 'guard_name' => 'web' ],
        ];

        foreach($permission as $row){
            Role::create($row);
        }
    }
}
