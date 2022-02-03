<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'id'=>1,
            'name'=>'Super Admin',
            'email'=>'super@admin.com',
            'password'=>bcrypt('password')
        ]);

        // Admin::create([
        //     'id'=>1,
        //     'name'=>'Admin',
        //     'email'=>'admin@gmail.com',
        //     'password'=>bcrypt('password')
        // ]);
        Admin::create([
            'id'=>2,
            'name'=>'Guard Admin',
            'email'=>'guard@admin.com',
            'password'=>bcrypt('password')
        ]);
    }
}
