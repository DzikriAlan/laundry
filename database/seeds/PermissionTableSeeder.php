<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [ 'name' => 'read outlets', 'guard_name' => 'web' ],
            [ 'name' => 'create outlets', 'guard_name' => 'web' ],
            [ 'name' => 'edit outlets', 'guard_name' => 'web' ],
            [ 'name' => 'delete outlets', 'guard_name' => 'web' ],
            [ 'name' => 'read couriers', 'guard_name' => 'web' ],
            [ 'name' => 'create couriers', 'guard_name' => 'web' ],
            [ 'name' => 'edit couriers', 'guard_name' => 'web' ],
            [ 'name' => 'delete couriers', 'guard_name' => 'web' ],
            [ 'name' => 'read products', 'guard_name' => 'web' ],
            [ 'name' => 'create products', 'guard_name' => 'web' ],
            [ 'name' => 'edit products', 'guard_name' => 'web' ],
            [ 'name' => 'delete products', 'guard_name' => 'web' ],
            [ 'name' => 'read permissions', 'guard_name' => 'web' ],
            [ 'name' => 'read expenses', 'guard_name' => 'web' ],
            [ 'name' => 'create expenses', 'guard_name' => 'web' ],
            [ 'name' => 'edit expenses', 'guard_name' => 'web' ],
            [ 'name' => 'delete expenses', 'guard_name' => 'web' ],
            [ 'name' => 'view expenses', 'guard_name' => 'web' ],
            [ 'name' => 'read customers', 'guard_name' => 'web' ],
            [ 'name' => 'create customers', 'guard_name' => 'web' ],
            [ 'name' => 'edit customers', 'guard_name' => 'web' ],
            [ 'name' => 'delete customers', 'guard_name' => 'web' ],
            [ 'name' => 'read transactions', 'guard_name' => 'web' ],
            [ 'name' => 'create transactions', 'guard_name' => 'web' ],
            [ 'name' => 'view transactions', 'guard_name' => 'web' ],
            [ 'name' => 'list transactions', 'guard_name' => 'web' ],
        ];

        foreach($permission as $row){
            Permission::create($row);
        }
    }
}
