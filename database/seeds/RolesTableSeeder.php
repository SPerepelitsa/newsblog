<?php

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
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => str_random(20),
        ]);
        DB::table('roles')->insert([
            'name' => 'moderator',
            'description' => str_random(20),
        ]);
        DB::table('roles')->insert([
            'name' => 'author',
            'description' => str_random(20),
        ]);
    }
}
