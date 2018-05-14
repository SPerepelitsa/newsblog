<?php

use Illuminate\Database\Seeder;

class PermissonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'create',
            'description' => str_random(20),
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit',
            'description' => str_random(20),
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete',
            'description' => str_random(20),
        ]);
    }
}
