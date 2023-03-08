<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "name" => "Super Admin",
                "level" => 1
            ],
            [
                "name" => "Admin",
                "level" => 2
            ],
            [
                "name" => "Editor",
                "level" => 3
            ],
            [
                "name" => "Publisher",
                "level" => 4
            ],
            [
                "name" => "User",
                "level" => 5
            ],
        ];

        foreach ($roles as $role) {
            $newRole = new Role();
            $newRole->name = $role['name'];
            $newRole->level = $role['level'];
            $newRole->save();
        }
    }
}
